/**
 * A flexible pager view for mobile - v1.0.0 - 2014/9/3
 * http://www.cosmozhang.com/
 * 
 * Copyright (c) 2014 Cosmo Zhang @ Beijing University of Posts and Telecommunications
 * Dual licensed under the MIT and GPL licenses.
 * http://www.cosmozhang.com/
 *
 * About: Dependencies
 * jQuery v1.9.0
 * 
 */
function TriblePager(list, startIndex, config) {

	// A reference to the TriblePager
	// This is used in some DOM Elements' listeners
	var thisRefer = this;

	// DOM Elements
	this.container = null;			// The outer container, fills the window
	this.view = null;						// Main pager box
	this.pageContainer = null;	// Container of pages
	this.closeButton  = null;

	var loopInterval = null;	// The interval id the the resize listening loop 

	var touchOn = false;
	var touchBegin = {
		x: 0.0,
		y: 0.0,
		time: 0,
		touchMoved: false
	};

	// The sizes of a single page
	this.pageSize = {
		width: 0.0,
		height: 0.0,
		marginLeft: 0.0,
		marginTop: 0.0
	};

	// Initial configurations
	this.config = {
		animateDuration: 200,						// Duration of the page slide animation
		animateEasing: 'swing',					// Easing style of the page slide animation
		imgSrcKey: 'url',								// Name of the property indication the img's src of the list's elements
		defaultImgSrc: null,						// Url of the image to be loaded on original image loading failed
		clickListener: null,						// When page is clicked, emit click event
																		// @param [Event] touchend event
																		// @param [TriblePager] this TriblePager object
		clickDelay: 300,								// The maximum delay to emit click event
		longTouchListener: null,				// When page is longtouched, emit longTouch event
																		// @param [Event] touchstart event
																		// @param [TriblePager] this TriblePager object
		longTouchDelay: 2000,						// The minimum delay time to emit longTouch event
		sensitivity: 0.5,								// If slide length is larger than (page's width)×sensitivity, turn page 
		pageSize: {											// Configure size of a single page, this can be a percentage('xx%'), a pixel length('xxpx') or a number
			width: '90%',
			height: '90%'
		},
		imageAdjustment: 'proportion',	// Configure the adjustment of the image
																		// 'proportion': Image is resized to fit the page size with the aspect ratio not changed
																		// 'cut': Image is cut to fill the page size with the aspect ratio not changed
																		// 'fill': Image is resized to fill the page size exactly
																		// 'auto': Image use its original size
																		// 'proportion|auto' or 'cut|auto': Image is adjusted by 'proportion' or 'cut' option unless it needs to be scale larger
		loadingIndicator: null,					// The inner html of image loading indicator
		closeButton: null,							// The inner html of the close button, if set to null, close button is not displayed
		destroyCallback: null,					// Called after the view is closed
																		// @param [TriblePager] this TriblePager object
		createCallback: null,						// Called after the view is created
																		// @param [TriblePager] this TriblePager object
		immediately: true,							// If the view is showed immediately after allocated
		elementId: null									// The id of the container element
	};

	this.list = (list && list.join) ? list : [];			// List contains the items of the page, each item's property named by config.imgSrcKey is used by the page's img as src
	this.currentIndex = startIndex ? startIndex : 0;	// Current page index
	$.extend(this.config, config);										// Initialize the configuration

	this.initPageSize = function() {
		if (this.container) {
			var windowWidth = $(window).width();
			var windowHeight = $(window).height();
			$(this.container).css('width', windowWidth + 'px');
			$(this.container).css('height', windowHeight + 'px');

			// Calculate exact page size according to configurations
			this.pageSize.width = windowWidth * 0.9;
			this.pageSize.height = windowHeight * 0.9;
			if (this.config.pageSize.width.indexOf('%') > 0) {
				var percentage = parseFloat(this.config.pageSize.width.replace(/[^\d]/g, ''));
				this.pageSize.width = windowWidth * (percentage/100.0);
			} else if (this.config.pageSize.width.indexOf('px')) {
				var pixels = parseFloat(this.config.pageSize.width.replace(/[^\d]/g, ''));
				this.pageSize.width = pixels;
			} else if (typeof this.config.pageSize.width === "number") {
				this.pageSize.width = parseFloat(this.config.pageSize.width);
			}
			if (this.config.pageSize.height.indexOf('%') > 0) {
				var percentage = parseFloat(this.config.pageSize.height.replace(/[^\d]/g, ''));
				this.pageSize.height = windowHeight * (percentage/100.0);
			} else if (this.config.pageSize.height.indexOf('px')) {
				var pixels = parseFloat(this.config.pageSize.height.replace(/[^\d]/g, ''));
				this.pageSize.height = pixels;
			} else if (typeof this.config.pageSize.height === "number") {
				this.pageSize.height = parseFloat(this.config.pageSize.height);
			}

			// Calculate the margins according to the exact page size
			this.pageSize.marginLeft = (parseFloat(windowWidth) - parseFloat(this.pageSize.width)) * 0.5;
			this.pageSize.marginTop = (parseFloat(windowHeight) - parseFloat(this.pageSize.height)) * 0.5;

			// Asign the sizes
			$(this.view).css('margin-left', this.pageSize.marginLeft + 'px');
			$(this.view).css('margin-right', this.pageSize.marginLeft + 'px');
			$(this.view).css('margin-top', this.pageSize.marginTop + 'px');
			$(this.view).css('margin-bottom', this.pageSize.marginTop + 'px');
			$(this.container).find('.pager-page').css('width', this.pageSize.width + 'px');
			$(this.container).find('.pager-page').css('height', this.pageSize.height + 'px');
			$(this.container).find('.pager-page .loading-indicator').css('line-height', this.pageSize.height + 'px');
			$(this.view).css('width', this.pageSize.width + 'px');
			$(this.view).css('height', this.pageSize.height + 'px');
			// The second page element is the current page, so the container's margin should be set to -pagewidth
			$(this.pageContainer).css('margin-left', (0 - this.pageSize.width) + 'px');

			$(this.pageContainer).find('.pager-page img').each(function() {
				if (typeof this.pagerResize === "function") this.pagerResize();
			});
		}
	};
	// Touch start listener of the page elements
	var onPageTouchStart = function(event) {
		if ((!event.clientX) || (!event.clientY)) {
			event.clientX = event.changedTouches[0].clientX;
			event.clientY = event.changedTouches[0].clientY;
		}
		event.preventDefault();
		touchOn = true;
		touchBegin.time = (new Date()).getTime();
		touchBegin.touchMoved = false;

		// Long touch
		if (typeof thisRefer.config.longTouchListener) {
			setTimeout(function() {
				if ((!touchBegin.touchMoved) && (typeof thisRefer.config.longTouchListener === "function")) 
					thisRefer.config.longTouchListener(event, thisRefer);
			}, thisRefer.config.longTouchDelay);
		}
		
		touchBegin.x = event.clientX + (document.body.scrollLeft||document.documentElement.scrollLeft);
		touchBegin.y = event.clientY + (document.body.scrollTop||document.documentElement.scrollTop);
		stopBubble(event);
	};
	// Touch move listener of the page elements
	var onPageTouchMove = function(event) {
		if ((!event.clientX) || (!event.clientY)) {
			event.clientX = event.changedTouches[0].clientX;
			event.clientY = event.changedTouches[0].clientY;
		}
		event.preventDefault();
		if (touchOn) {
			touchBegin.touchMoved = true;
			var clientX = event.clientX + (document.body.scrollLeft||document.documentElement.scrollLeft);
			var clientY = event.clientY + (document.body.scrollTop||document.documentElement.scrollTop);
			var offsetX = clientX - touchBegin.x;
			var offsetY = clientY - touchBegin.y;
			// Move the page horizontally according to the offset
			$(thisRefer.pageContainer).css('marginLeft', (offsetX - thisRefer.pageSize.width) + 'px');
		}
		stopBubble(event);
	};
	// Touch end listener of the page elements
	var onPageTouchEnd = function(event) {
		if ((!event.clientX) || (!event.clientY)) {
			event.clientX = event.changedTouches[0].clientX;
			event.clientY = event.changedTouches[0].clientY;
		}
		event.preventDefault();
		if (touchOn) {
			// On click
			var currTime = (new Date()).getTime();
			if (currTime - touchBegin.time < thisRefer.config.clickDelay) {
				if ((!touchBegin.touchMoved) && (typeof thisRefer.config.clickListener === "function")) 
					thisRefer.config.clickListener(event, thisRefer);
			}

			var clientX = event.clientX + (document.body.scrollLeft||document.documentElement.scrollLeft);
			var clientY = event.clientY + (document.body.scrollTop||document.documentElement.scrollTop);
			var offsetX = clientX - touchBegin.x;
			var offsetY = clientY - touchBegin.y;
			if (offsetX > 0) {
				// Finger slide from left to right, should go to previous page
				if (offsetX > (parseFloat(thisRefer.pageSize.width) * thisRefer.config.sensitivity)) {
					thisRefer.gotoPrev();
				} else {
					// Slide distance is too short, do not turn page
					thisRefer.gotoCurrent();
				}
			} else {
				// Finger slide from right to left, should go to next page
				if ((0 - offsetX) > (parseFloat(thisRefer.pageSize.width) * thisRefer.config.sensitivity)) {
					thisRefer.gotoNext();
				} else {
					// Slide distance is too short, do not turn page
					thisRefer.gotoCurrent();
				}
			}
		}
		touchOn = false;
		stopBubble(event);
	};
	this.gotoNext = function() {
		var thePagerView = this;
		if (thePagerView.currentIndex + 1 < thePagerView.list.length) {
			// The next page exists
			$(thePagerView.pageContainer).animate({"marginLeft":(0 - thePagerView.pageSize.width*2)+"px"}, thePagerView.config.animateDuration, thePagerView.config.animateEasing, function() {
				thePagerView.currentIndex += 1;
				// Add new page element, remove old
				var pendingUrl = (thePagerView.currentIndex + 1 < thePagerView.list.length) ? thePagerView.list[thePagerView.currentIndex + 1][thePagerView.config.imgSrcKey] : null;
				thePagerView.pushPage(pendingUrl);
				thePagerView.shiftPage();
				thePagerView.pageContainer.style.marginLeft = (0 - thePagerView.pageSize.width) + 'px';
			});
		} else {
			// The next page doesn't exists, do not turn page
			$(thePagerView.pageContainer).animate({"marginLeft":(0 - thePagerView.pageSize.width)+"px"}, thePagerView.config.animateDuration, thePagerView.config.animateEasing);
		}
	};
	this.gotoPrev = function() {
		var thePagerView = this;
		if (thePagerView.currentIndex - 1 >= 0) {
			$(thePagerView.pageContainer).animate({"marginLeft":"0px"}, thePagerView.config.animateDuration, thePagerView.config.animateEasing, function() {
				thePagerView.currentIndex -= 1;
				var pendingUrl = (thePagerView.currentIndex - 1 >= 0) ? thePagerView.list[thePagerView.currentIndex - 1][thePagerView.config.imgSrcKey] : null;
				thePagerView.insertPage(pendingUrl);
				thePagerView.popPage();
				thePagerView.pageContainer.style.marginLeft = (0 - thePagerView.pageSize.width) + 'px';
			});
		} else {
			$(thePagerView.pageContainer).animate({"marginLeft":(0 - thePagerView.pageSize.width)+"px"}, thePagerView.config.animateDuration, thePagerView.config.animateEasing);
		}
	};
	this.gotoCurrent = function() {
		var thePagerView = this;
		$(thePagerView.pageContainer).animate({"marginLeft":(0 - thePagerView.pageSize.width)+"px"}, thePagerView.config.animateDuration, thePagerView.config.animateEasing);
	}
	this.createPager = function() {
		this.container = document.createElement('div');
		this.container.className = "pager-container";
		this.view = document.createElement('div');
		this.view.className = "pager";
		this.pageContainer = document.createElement('div');
		this.pageContainer.className = "pager-page-container";
		if (this.config.elementId) this.container.id = this.config.elementId;
		if (this.config.closeButton) {
			this.closeButton = document.createElement('div');
			this.closeButton.className = "pager-close-button";
			this.closeButton.innerHTML = this.config.closeButton;
			this.closeButton.onclick = function() {
				thisRefer.destroy();
			}
		}

		this.container.appendChild(this.view);
		if (this.config.closeButton) this.container.appendChild(this.closeButton);
		this.view.appendChild(this.pageContainer);
		
		document.body.appendChild(this.container);

		this.view.ontouchstart = onPageTouchStart;
		this.view.ontouchmove = onPageTouchMove;
		this.view.ontouchend = onPageTouchEnd;

		this.view.onmousedown = onPageTouchStart;
		this.view.onmousemove = onPageTouchMove;
		this.view.onmouseup = onPageTouchEnd;

		var initialImageUrl1 = (this.currentIndex - 1 >= 0) ? this.list[this.currentIndex - 1][this.config.imgSrcKey] : null;
		var initialImageUrl2 = (this.currentIndex >= 0 && this.currentIndex < this.list.length) ? this.list[this.currentIndex][this.config.imgSrcKey] : null;
		var initialImageUrl3 = (this.currentIndex + 1 < this.list.length) ? this.list[this.currentIndex + 1][this.config.imgSrcKey] : null;
		this.initializePager(initialImageUrl1, initialImageUrl2, initialImageUrl3);
		this.initPageSize();
	};
	this.initializePager = function(src1, src2, src3) {
		this.pageContainer.removeAllChildNodes();
		this.pushPage(src1);
		this.pushPage(src2);
		this.pushPage(src3);
	};
	// Called when page img element's size changed
	var imgResize = function() {
		$(this).css('height', 'auto');
		$(this).css('width', 'auto');
		var thePage = $(this).parents('.pager-page')[0];
		var pageWidth = parseFloat($(thePage).width());
		var pageHeight = parseFloat($(thePage).height());
		var thisWidth = parseFloat($(this).width());
		var thisHeight = parseFloat($(this).height());
		if (thisWidth > 0 && thisHeight > 0) {
			if (thisRefer.config.imageAdjustment === "fill") {
				$(this).css('width', pageWidth + 'px');
				$(this).css('height', pageHeight + 'px');
				$(this).css('marginLeft', '0px');
				$(this).css('marginTop', '0px');
			} else {
				var adjustmentOptions = thisRefer.config.imageAdjustment.split('|');
				var proportion = false;
				var cut = false;
				var auto = false;
				for (var i = 0; i < adjustmentOptions.length; i++) {
					if (adjustmentOptions[i] === "proportion") {
						proportion = true;
					} else if (adjustmentOptions[i] === "cut") {
						cut = true;
					} else if (adjustmentOptions[i] === "auto") {
						auto = true;
					}
				}
				if (!(proportion || cut || auto)) proportion = true;	// Default setting
				if (proportion) {
					if (thisWidth/thisHeight > pageWidth/pageHeight) {
						if (thisWidth > pageWidth || (!auto)) {
							var resizeRate = thisWidth / pageWidth;
							var resizeWidth = thisWidth / resizeRate;
							var resizeHeight = thisHeight / resizeRate;
							$(this).css('width', resizeWidth + 'px');
							$(this).css('height', resizeHeight + 'px');
							$(this).css('marginLeft', ((pageWidth - resizeWidth) / 2) + 'px');
							$(this).css('marginTop', ((pageHeight - resizeHeight) / 2) + 'px');
						} else {
							var resizeWidth = thisWidth;
							var resizeHeight = thisHeight;
							$(this).css('width', resizeWidth + 'px');
							$(this).css('height', resizeHeight + 'px');
							$(this).css('marginLeft', ((pageWidth - resizeWidth) / 2) + 'px');
							$(this).css('marginTop', ((pageHeight - resizeHeight) / 2) + 'px');
						}
					} else {
						if (thisHeight > pageHeight || (!auto)) {
							var resizeRate = thisHeight / pageHeight;
							var resizeWidth = thisWidth / resizeRate;
							var resizeHeight = thisHeight / resizeRate;
							$(this).css('width', resizeWidth + 'px');
							$(this).css('height', resizeHeight + 'px');
							$(this).css('marginLeft', ((pageWidth - resizeWidth) / 2) + 'px');
							$(this).css('marginTop', ((pageHeight - resizeHeight) / 2) + 'px');
						} else {
							var resizeWidth = thisWidth;
							var resizeHeight = thisHeight;
							$(this).css('width', resizeWidth + 'px');
							$(this).css('height', resizeHeight + 'px');
							$(this).css('marginLeft', ((pageWidth - resizeWidth) / 2) + 'px');
							$(this).css('marginTop', ((pageHeight - resizeHeight) / 2) + 'px');
						}
					}
				} else if (cut) {
					if (thisWidth/thisHeight > pageWidth/pageHeight) {
						if (thisHeight > pageHeight || (!auto)) {
							var resizeRate = thisHeight / pageHeight;
							var resizeWidth = thisWidth / resizeRate;
							var resizeHeight = thisHeight / resizeRate;
							$(this).css('width', resizeWidth + 'px');
							$(this).css('height', resizeHeight + 'px');
							$(this).css('marginLeft', ((pageWidth - resizeWidth) / 2) + 'px');
							$(this).css('marginTop', ((pageHeight - resizeHeight) / 2) + 'px');
						} else {
							var resizeWidth = thisWidth;
							var resizeHeight = thisHeight;
							$(this).css('width', resizeWidth + 'px');
							$(this).css('height', resizeHeight + 'px');
							$(this).css('marginLeft', ((pageWidth - resizeWidth) / 2) + 'px');
							$(this).css('marginTop', ((pageHeight - resizeHeight) / 2) + 'px');
						}
					} else {
						if (thisWidth > pageWidth || (!auto)) {
							var resizeRate = thisWidth / pageWidth;
							var resizeWidth = thisWidth / resizeRate;
							var resizeHeight = thisHeight / resizeRate;
							$(this).css('width', resizeWidth + 'px');
							$(this).css('height', resizeHeight + 'px');
							$(this).css('marginLeft', ((pageWidth - resizeWidth) / 2) + 'px');
							$(this).css('marginTop', ((pageHeight - resizeHeight) / 2) + 'px');
						} else {
							var resizeWidth = thisWidth;
							var resizeHeight = thisHeight;
							$(this).css('width', resizeWidth + 'px');
							$(this).css('height', resizeHeight + 'px');
							$(this).css('marginLeft', ((pageWidth - resizeWidth) / 2) + 'px');
							$(this).css('marginTop', ((pageHeight - resizeHeight) / 2) + 'px');
						}
					}
				}
			}
		}
	};
	this.pushPage = function(src) {
		var page = document.createElement('div');
		page.className = "pager-page";
		var loadingIndicator = document.createElement('div');
		loadingIndicator.className = "pager-loading-indicator";
		// var loadingIndicatorContentRow = document.createElement('div');
		// loadingIndicatorContentRow.className = "pager-loading-indicator-content-row";
		var loadingIndicatorContent = document.createElement('div');
		loadingIndicatorContent.className = "pager-loading-indicator-content";
		var img = document.createElement('img');
		page.style.width = this.pageSize.width + 'px';
		page.style.height = this.pageSize.height + 'px';
		loadingIndicator.style.lineHeight = this.pageSize.height + 'px';
		img.style.width = "auto";
		img.style.height = "auto";
		if (this.config.loadingIndicator && src) loadingIndicatorContent.innerHTML = this.config.loadingIndicator;
		if (src) page.appendChild(img);
		// loadingIndicatorContentRow.appendChild(loadingIndicatorContent);
		// loadingIndicator.appendChild(loadingIndicatorContentRow);
		loadingIndicator.appendChild(loadingIndicatorContent);
		page.appendChild(loadingIndicator);
		this.pageContainer.appendChild(page);
		if (src) {
			img.pagerResize = imgResize;
			img.onerror = function() {
				if (thisRefer.config.defaultImgSrc) this.src = thisRefer.config.defaultImgSrc;
				else this.removeAttribute('src');
			};
			img.onload = function() {
				$(loadingIndicator).hide();
			};
			img.src = src;
		}
	};
	this.insertPage = function(src) {
		var page = document.createElement('div');
		page.className = "pager-page";
		var loadingIndicator = document.createElement('div');
		loadingIndicator.className = "pager-loading-indicator";
		// var loadingIndicatorContentRow = document.createElement('div');
		// loadingIndicatorContentRow.className = "pager-loading-indicator-content-row";
		var loadingIndicatorContent = document.createElement('div');
		loadingIndicatorContent.className = "pager-loading-indicator-content";
		var img = document.createElement('img');
		page.style.width = this.pageSize.width + 'px';
		page.style.height = this.pageSize.height + 'px';
		loadingIndicator.style.lineHeight = this.pageSize.height + 'px';
		img.style.width = "auto";
		img.style.height = "auto";
		if (this.config.loadingIndicator && src) loadingIndicatorContent.innerHTML = this.config.loadingIndicator;
		if (src) page.appendChild(img);
		// loadingIndicatorContentRow.appendChild(loadingIndicatorContent);
		// loadingIndicator.appendChild(loadingIndicatorContentRow);
		loadingIndicator.appendChild(loadingIndicatorContent);
		page.appendChild(loadingIndicator);
		this.pageContainer.insertBefore(page, this.pageContainer.childNodes[0]);
		if (src) {
			img.pagerResize = imgResize;
			img.onerror = function() {
				if (thisRefer.config.defaultImgSrc) this.src = thisRefer.config.defaultImgSrc;
				else this.removeAttribute('src');
			};
			img.onload = function() {
				$(loadingIndicator).hide();
			};
			img.src = src;
		}
	};
	this.shiftPage = function() {
		$($(this.pageContainer).find('.pager-page')[0]).remove();
	};
	this.popPage = function() {
		var thePages = $(this.pageContainer).find('.pager-page');
		if (thePages.length > 0) $(thePages[thePages.length - 1]).remove();
	};

	this.destroy = function() {
		$(this.container).remove();
		window.clearInterval(loopInterval);
		if (typeof this.config.destroyCallback === "function") this.config.destroyCallback(this); 
	};
	this.create = function() {
		this.createPager();
		$(window).resize(function() {
			thisRefer.initPageSize();
		});
		// Loop to detect pager img size changing
		loopInterval = window.setInterval(function() {
			$(thisRefer.pageContainer).find('.pager-page img').each(function(){
				var currWidth = $(this).width();
				var currHeight = $(this).height();
				var lastWidth = $(this).data('pagerLastWidth');
				var lastHeight = $(this).data('pagerLastHeight');
				if (!((currWidth === lastWidth) && (currHeight === lastHeight))) {
					$(this).data('pagerLastWidth', currWidth);
					$(this).data('pagerLastHeight', currHeight);
					if (typeof this.pagerResize === "function") {
						this.pagerResize();
					}
				}
			});
		}, 200);
		if (typeof this.config.createCallback === "function") this.config.createCallback(this);
	};

	if (this.config.immediately) this.create();
}