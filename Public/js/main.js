// JavaScript Document

//----------------
//read COOKIE
function getCookie(cookiename) {
	var result;
	var mycookie = document.cookie;
	var start2 = mycookie.indexOf(cookiename + "=");
	if (start2 > -1) {
		start = mycookie.indexOf("=", start2) + 1;
		var end = mycookie.indexOf(";", start);
		if (end == -1) {
			end = mycookie.length;
		}
		result = unescape(mycookie.substring(start, end));
	}
	return result;
}
//----------------
//write COOKIE
function setCookie(cookiename, cookievalue, hours) {
	var date = new Date();
	if (hours==0) {
		document.cookie = cookiename + "=" + cookievalue + "; path=/";
	} else {
		date.setTime(date.getTime() + Number(hours) * 3600 * 1000);
		document.cookie = cookiename + "=" + cookievalue + "; path=/;expires = " + date.toGMTString();
	};
}

function stopPropagation(e) {
	console.log(e);
	e = e || window.event;
	if(e.stopPropagation) { //W3C阻止冒泡方法
		e.stopPropagation();
	} else {
		e.cancelBubble = true; //IE阻止冒泡方法
	}
}

function nodeContains(parent, child) {
	if (parent.contains) {
		return parent != child && parent.contains(child);
	} else {
		return !!(parent.compareDocumentPosition(child));
	}
}

function getEvent(e) {
	return e || window.event;
}

function checkHover(e, target) {
	var rel = getEvent(e).relatedTarget;
	var from = getEvent(e).fromElement;
	var to = getEvent(e).toElement;
	if (getEvent(e).type="mouseover") {
		return !nodeContains(target, rel || from) && !( (rel||from) === target);
	} else {
		return !nodeContains(target, rel || to  ) && !( (rel||to)   === target);
	}
}

function parseBool(val) {
	switch (typeof val) {
		case "string":
			if (val == "true") return true;
			else return false;
			break;
		case "number":
			if (parseInt(val) > 0) return true;
			else return false;
			break;
		case "boolean":
			return val;
			break;
		case "object":
			if (val === null) return false;
			else return true;
			break;
		case "function":
			return true;
			break;
		case "undefined":
			return false;
			break;
	}
	return false;
}

Array.prototype.remove = function(ele) {
	for (var i = 0; i < this.length; i++) {
		if (this[i] === ele) {
			this.splice(i);
			return i;
		}
	}
	return -1;
}

Array.prototype.indexOf = function(ele) {
	for (var i = 0; i < this.length; i++) {
		if (this[i] === ele) {
			return i;
		}
	}
	return -1;
}

$(document).ready(function(e) {
	// Left fan-nav widget
	var userAgent = navigator.userAgent;
	var isOpera = userAgent.indexOf("Opera") > -1;
	//$('#left-fan-container').css('visibility','hidden');
	if (!isOpera) {
		if (!(getCookie('fan_nav')=='no')) {
			//$('#left-fan').css('opacity','0');
			//var initialtop = $('#left-fan-container').css('top');
			//$('#left-fan-container').css('top','-600px');
			//$('#left-fan').css('z-index','-5');
			$('.left-fan-toggle-content > .fa').removeClass('fa-chevron-down');
			$('.left-fan-toggle-content > .fa').addClass('fa-chevron-up');
			$('.left-fan-toggle-content').attr('onclick', "setFanNav(false); return false;");
			if (getCookie('no_nav_toggle_indicator')=='yes') $('#left-fan-toggle-indicator').css('display', 'none');
			$('.main-container').removeClass('no-padding-left');
			setTimeout(function() {
				//$('#left-fan').css('opacity','1');
				//$('#left-fan-container').css('visibility','visible');
				$('#left-fan-container').animate({top:'-100px'},600,'swing',function() {
					$('#left-fan-toggle-indicator').animate({opacity:0.7},200,'swing',function(){
						setTimeout(function(){
							$('#left-fan-toggle-indicator').animate({opacity:0.0},200,'swing',function() {
								$('#left-fan-toggle-indicator').css('display', 'none');
							});
						},3000);
					})
				});
			},500);
		} else {
			$('#left-fan-container').css('display', 'none');
			$('#left-fan-toggle-indicator').css('display', 'none');
			$('.left-fan-toggle-content > .fa').removeClass('fa-chevron-up');
			$('.left-fan-toggle-content > .fa').addClass('fa-chevron-down');
			$('.left-fan-toggle-content').attr('onclick', "setFanNav(true); return false;");
			$('.main-container').addClass('no-padding-left');
		}
	} else {
		$('#left-fan-container').css('display', 'none');
		$('#left-fan-toggle-container').css('display', 'none');
		$('#left-fan-toggle-indicator').css('display', 'none');
		$('.main-container').removeClass('no-padding-left');
	};
	
});

function setNoFanNavToggleIndicator() {
	setCookie('no_nav_toggle_indicator', 'yes', 0);
	$('#left-fan-toggle-indicator').animate({opacity:0.0},200,'swing',function() {
		$('#left-fan-toggle-indicator').css('display', 'none');
	});
}
i=0;
function setFanNav(show) {
	setCookie('fan_nav', show?'yes':'no', 0);
	if (show) {
		$('#left-fan-container').css('display', 'block');
		//$('#left-fan').css('opacity','1');
		$('#left-fan-container').animate({top:'-100px'},600,'swing', function() {
			$('.left-fan-toggle-content > .fa').removeClass('fa-chevron-down');
			$('.left-fan-toggle-content > .fa').addClass('fa-chevron-up');
			$('.left-fan-toggle-content').attr('onclick', "setFanNav(false); return false;");
		});
		$('.main-container').removeClass('no-padding-left');
	} else {
		$('#left-fan-container').animate({top:'-600px'},600,'swing', function() {
			$('#left-fan-container').css('display', 'none');
			$('.left-fan-toggle-content > .fa').removeClass('fa-chevron-up');
			$('.left-fan-toggle-content > .fa').addClass('fa-chevron-down');
			$('.left-fan-toggle-content').attr('onclick', "setFanNav(true); return false;");
			$('.main-container').addClass('no-padding-left');
		});
		$('#left-fan-toggle-indicator').animate({opacity:0.0},200,'swing',function() {
			$('#left-fan-toggle-indicator').css('display', 'none');
		});
	};
}