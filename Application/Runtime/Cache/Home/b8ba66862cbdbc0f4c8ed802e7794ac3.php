<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo ((isset($page_info['title']) && ($page_info['title'] !== ""))?($page_info['title']):首页); ?> - 花栗鼠与美女猫</title>
	<link rel="stylesheet" href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" />
<!-- <link href="http://libs.baidu.com/fontawesome/4.0.3/css/font-awesome.min.css" rel="stylesheet"> -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet/less" type="text/css" href="/cosmo_blog/Public/css/style.css">
	<script type="text/javascript" src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script type="text/javascript" src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script type="text/javascript">
// less = {
// 	env: "<?php if (APP_DEBUG) echo 'development'; else echo 'production'; ?>",
// 	logLevel: 2,
// 	async: false,
// 	fileAsync: false,
// 	poll: 1000,
// 	functions: {},
// 	dumpLineNumbers: "comments",
// 	relativeUrls: false,
// 	globalVars: {
// 		var1: '"string value"',
// 		var2: 'regular value'
// 	},
// 	rootpath: ":/a.com/"
// };
less = {
	env: "<?php if (APP_DEBUG) echo 'development'; else echo 'production'; ?>"
};
</script>
<script type="text/javascript" src="http://libs.baidu.com/lesscss/1.3.0/less.min.js"></script>
	<script type="text/javascript">
		App = {};
		<?php if (APP_DEBUG) : ?>
		App.isDebug = true;
		<?php else: ?>
		App.isDebug = false;
		<?php endif; ?>
		
		console.secureLog = console.log;
		console.secureWarn = console.warn;
		console.secureTrace = console.trace;
		console.secureError = console.error;

		if (!App.isDebug) {
			console.log = function () {};
			console.warn = function () {};
			console.trace = function () {};
			console.error = function () {};
		}
	</script>
</head>
	<body>
		<div class="header">
	<div class="top-nav-bar">
		<li class="top-nav-item top-nav-item-em">
			<a class="button" href="<?php echo U('/');?>">
				<span class="top-nav-content-chinese">喵</span>
				<span class="top-nav-content-english">Me</span>
			</a>
		</li>
		<li class="top-nav-item">
			<a class="button" href="<?php echo U('/articles/');?>">
				<span class="top-nav-content-chinese">文章</span>
				<span class="top-nav-content-english">Articles</span>
			</a>
		</li>
		<li class="top-nav-item">
			<a class="button" href="<?php echo U('/galleries/');?>">
				<span class="top-nav-content-chinese">相册</span>
				<span class="top-nav-content-english">Galary</span>
			</a>
		</li>
		<li class="top-nav-item">
			<a class="button" href="#">
				<span class="top-nav-content-chinese">游戏</span>
				<span class="top-nav-content-english">Games</span>
			</a>
		</li>
		<li class="top-nav-item">
			<a class="button" href="<?php echo U('/resume/');?>">
				<span class="top-nav-content-chinese">关于</span>
				<span class="top-nav-content-english">About</span>
			</a>
		</li>
	</div>
</div>
		<?php if($closeFanNav): ?><script type="text/javascript">App.closeFanNav = true;</script>
<?php else: ?>
<div class="left-fan-container" id="left-fan-container">
	<div class="left-roll" id="left-roll"></div>
	<iframe class="left-fan" id="left-fan" src="<?php echo U('/index_inframe');?>"></iframe>
</div>
<div class="left-fan-toggle-container">
	<div class="left-fan-toggle-content">
		<span class="fa fa-chevron-up"></span>
		<span class="fa fa-chevron-up"></span>
	</div>
</div>
<div class="left-fan-toggle-indicator" id="left-fan-toggle-indicator">
	<div class="left-fan-toggle-indicator-left-triangle left-fan-toggle-indicator-left-triangle-shadow"></div>
	<div class="left-fan-toggle-indicator-bubble">
		浏览器太卡？点击箭头隐藏挂件以节省资源哦~<a href="javascript:setNoFanNavToggleIndicator();">我知道了</a>
	</div>
	<div class="left-fan-toggle-indicator-left-triangle left-fan-toggle-indicator-left-triangle-body"></div>
</div><?php endif; ?>
		<div class="main-container">
			<link rel="stylesheet" type="text/css" href="/cosmo_blog//Public/css/page-flag.css">
<style type="text/css">

.page-flag-container {
	left: 100px;
}
.page-flag {
	border-color: transparent #FF3366;
}

.gallary-container {
	padding-left: 100px;
	padding-right: 100px;
	margin-top: 50px;
}
.gallary-title {
}
.tester-container {
	height: 0px;
}
.photo-list-container {
	padding-left: 100px;
	padding-right: 100px;
}
.photo-list {
	display: block;
	width: 100%;
	margin-left: 0px;
	margin-right: 0px;
	padding-bottom: 10px;
}
.photo-row {
	display: inline-block;
	/*width: auto;*/
	height: auto;
	white-space: nowrap;
	margin-bottom: 10px;
}
.photo-row:last-child {
	margin-bottom: 0px;
}
.photo-list > .photo-item {
	display: none;
}
.photo-item {
	/*height: 230px;*/
	/*width: auto;*/
	height: auto;
	display: inline-block;
	margin: 0 3px;
	border: 1px #CCC solid;
	overflow: hidden;
	cursor: pointer;
	position: relative;
}
.photo-item img {
	display: inline-block;
	/*height: 100%;*/
	height: 200px;
	width: auto;
}
.photo-item img:hover {
}

@keyframes photo-detail-show {
	0% {
		bottom: -30px;
	}
	100% {
		bottom: 0px;
	}
}
@-webkit-keyframes photo-detail-show {
	0% {
		bottom: -30px;
	}
	100% {
		bottom: 0px;
	}
}
@-moz-keyframes photo-detail-show {
	0% {
		bottom: -30px;
	}
	100% {
		bottom: 0px;
	}
}
@-o-keyframes photo-detail-show {
	0% {
		bottom: -30px;
	}
	100% {
		bottom: 0px;
	}
}
@keyframes photo-detail-hide {
	0% {
		bottom: 0px;
	}
	100% {
		bottom: -30px;
	}
}
@-webkit-keyframes photo-detail-hide {
	0% {
		bottom: 0px;
	}
	100% {
		bottom: -30px;
	}
}
@-moz-keyframes photo-detail-hide {
	0% {
		bottom: 0px;
	}
	100% {
		bottom: -30px;
	}
}
@-o-keyframes photo-detail-hide {
	0% {
		bottom: 0px;
	}
	100% {
		bottom: -30px;
	}
}
.photo-item .detail {
	width: 100%;
	height: 30px;
	background-color: rgba(0,0,0,0.5);
	line-height: 30px;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
	vertical-align: middle;
	color: #fff;
	padding: 0 5px;
	position: absolute;
	bottom: 0px;
	animation: photo-detail-hide  0.2s forwards;
	-webkit-animation: photo-detail-hide  0.2s forwards;
	-moz-animation: photo-detail-hide  0.2s forwards;
	-o-animation: photo-detail-hide  0.2s forwards;
	-ms-animation: photo-detail-hide  0.2s forwards;
}
.photo-item:hover .detail {
	animation: photo-detail-show  0.2s forwards;
	-webkit-animation: photo-detail-show  0.2s forwards;
	-moz-animation: photo-detail-show  0.2s forwards;
	-o-animation: photo-detail-show  0.2s forwards;
	-ms-animation: photo-detail-show  0.2s forwards;
}
@media screen and (min-width: 0px) and (max-width: 768px) {
	.photo-item img {
		height: 100px;
	}
}
@media screen and (min-width: 769px) and (max-width: 1024) {
	.photo-item img {
		height: 130px;
	}
}
@media screen and (min-width: 1025px) and (max-width: 1440px) {
	.photo-item img {
		height: 150px;
	}
}
@media screen and (min-width: 1441px) {
	.photo-item img {
		height: 280px;
	}
}
.test {
	height: 0px;
}

.loading-indicator-bar {
	height: 50px;
	text-align: center;
	margin-bottom: 10px;
}
.loading-indicator-container {
	width: 50px;
	height: 50px;
	display: inline-block;
}

.refresh-button-bar {
	text-align: center;
	margin-bottom: 10px;
}
.refresh-button {
	display: inline-block;
	cursor: pointer;
	width: 300px;
	height: 50px;
	line-height: 50px;
	border: 1px #CCC solid;
	background-color: #EEE;
	font-size: 18px;
	text-align: center;
	vertical-align: middle;
}
.refresh-button:hover {
	color: #0099FF;
	text-shadow: 0 0 1px #fff;
	border-color: #6600CC;
}

.modal {
	text-align: center;
}

.modal-body {
	display: inline-block;
	width: auto;
	height: auto;
	margin-top: 50px;
	margin-bottom: 50px;
	padding: 0px;
}

.modal-body .photo-container {
	background-color: #000;
	height: 100%;
	position: relative;
	overflow: hidden;
}
.modal-body .photo {
	display: inline-block;
	width: auto;
	height: auto;
	position: absolute;
}
.modal-body .photo-description {
	padding: 5px;
	position: absolute;
	bottom: 0px;
	width: 100%;
	min-height: 40px;
	padding-right: 45px;
	color: #fff;
	font-size: 17px;
	background-color: rgba(0,0,0,0.5);
	vertical-align: middle;
}
.modal-body .photo-zoom {
	width: 40px;
	height: 40px;
	line-height: 40px;
	text-align: center;
	vertical-align: middle;
	display: inline-block;
	position: absolute;
	bottom: 0px;
	right: 0px;
	color: rgba(255,255,255,0.6);
	font-size: 20px;
	padding: 10px;
	cursor: pointer;
}
.modal-body .photo-zoom:hover {
	color: #fff;
}
.modal-close {
	width: 60px;
	height: 60px;
	line-height: 60px;
	text-align: center;
	vertical-align: middle;
	display: inline-block;
	position: absolute;
	top: 0px;
	right: 0px;
	color: rgba(255,255,255,0.6);
	font-size: 30px;
	padding: 15px;
	cursor: pointer;
}
.modal-close:hover {
	background-color: rgba(0,0,0,0.5);
	color: #fff;
}
.modal-nav {
	width: 60px;
	height: 60px;
	line-height: 60px;
	display: inline-block;
	padding: 15px;
	font-size: 30px;
	color: rgba(255,255,255,0.6);
	position: absolute;
	top: 50%;
	margin-top: -30px;
	cursor: pointer;
}
.modal-nav:hover {
	background-color: rgba(0,0,0,0.5);
	color: #fff;
}
.modal-nav-prev {
	left: 0px;
}
.modal-nav-next {
	right: 0px;
}
</style>

<div class="page-flag-container">
	<div class="page-flag-left"></div>
	<div class="page-flag-right"></div>
	<div class="page-flag"></div>
	<div class="page-flag-text">
		<h3><?php echo ($page_flag["title"]); ?></h3>
		<p><?php echo ($page_flag["subtitle"]); ?></p>
	</div>
</div>
<!-- 这个页面的部分布局思路来自ISUX，向他表示感谢！ -->
<!-- http://isux.tencent.com/high-equal-response-layout-html.html -->
<div id="photo-list-container" class="photo-list-container">
	<div id="photo-list" class="photo-list">
	</div>
	<div id="loading-indicator" class="loading-indicator-bar">
		<div class="loading-indicator-container">
	<div class="loading-indicator loading-indicator-2"></div>
	<div class="loading-indicator loading-indicator-1"></div>
</div>
	</div>
	<div id="refresh-button" class="refresh-button-bar">
		<span class="refresh-button">点击加载更多</span>
	</div>
</div>
<div class="modal fade" id="detail-modal">
	<div class="modal-body">
		<div id="modal-photo-container" class="photo-container">
			<div id="modal-photo" class="photo">
				<img src=""/>
			</div>
			<div class="photo-description">title</div>
			<div id="modal-photo-zoom" class="photo-zoom" onclick="toggleModalPhotoZoom();"><span class="fa fa-search-pus"></span></div>
			<div class="modal-nav modal-nav-prev" onclick="gotoPrev();"><span class="fa fa-chevron-left"></div>
			<div class="modal-nav modal-nav-next" onclick="gotoNext();"><span class="fa fa-chevron-right"></div>
		</div>
	</div>
	<div class="modal-close" onclick="$('#detail-modal').modal('hide')"><span class="fa fa-times"></span></div>
</div>
<script type="text/javascript">

// This script handles the 

// Consts defination
var ROWS = 3;					// initial curr_rows to show
var ROW_STEP = 2;			// How many curr_rows to add when loading
var IMG_LOAD_CNT = 6;	// How many images to load in one loading

var curr_rows = ROWS;

var isLoading = false;

var scrollLoadAllowed = false;
var scrollLoadDelay = 2000;

// Objects
var photos = [];

$.get("<?php echo U('/api/gallery/'.$gallary['id'].'/photos') ?>", function(data, status) {
	if (status=='success') {
		photos = JSON.parse(data);
		$.each(photos, function() {
			this.row = -1;
			this.id = parseInt(this.id);
		});
		initListView();
	} else {
		console.warn('Error when fetching photos: HTTP Error '+status);
	}
});

function getAssignedPhotos(row) {
	var returnPhotos = [];
	if (row === undefined) {
		$.each(photos, function() {
			// if (this.row >=0 && this.row < curr_rows) {
			if (this.row >= 0) {
				returnPhotos.push(this);
			}
		});
	} else {
		$.each(photos, function() {
			if (this.row == row) {
				returnPhotos.push(this);
			}
		});
	}
	return returnPhotos;
}

function getUnassignedPhotos() {
	var returnPhotos = [];
	$.each(photos, function() {
		// if (!(this.row >=0 && this.row < curr_rows)) {
		if (this.row < 0) {
			returnPhotos.push(this);
		}
	});
	return returnPhotos;
}

function findPhoto(id) {
	for (var i = 0; i < photos.length; i++) {
		var p = photos[i];
		if (p.id == id) {
			return p;
		}
	}
	return null;
}

function getReferWidth() {
	return $('#photo-list-container').width();
}

function getReferHeight() {
	var referWidth = getReferWidth();
	if (referWidth <= 768) {
		return 150;
	} else if (referWidth <= 1024) {
		return 180;
	} else {
		return 200;
	}
}

function addRow(callback) {
	var theRow = document.createElement('div');
	theRow.className="photo-row test";
	document.getElementById('photo-list').appendChild(theRow);
	var rowid = $('#photo-list').find('.photo-row').length - 1;
	appendRow(theRow, rowid, callback);
}

/**
 * 向行中添加 photo-item
 * @param  {dom|$selector->dom}	row:行
 * @param  {number}   					rowid:行序号
 * @param  {Function} 					callback
 * @return {void}
 */
function appendRow(row, rowid, callback) {
	var unassignedPhotos = getUnassignedPhotos();
	if (!(typeof rowid == 'number')) {
		throw new Error('Illegal type error: rowid must be number, you passed ', rowid);
	}
	row = $(row)[0];
	var imgsAppended = [];
	var photosAppended = [];
	var rowLoading = true;
	for (var i = 0; i < IMG_LOAD_CNT; i++) {
		var thePhoto = unassignedPhotos.shift();
		if (!thePhoto) break;
		var theImg = document.createElement('img');
		theImg.id = 'photo'+thePhoto.id;
		theImg.dataset.photoId = thePhoto.id;
		theImg.onload = function() {
			if (checkRowLoad(row) && rowLoading) {
				rowLoading = false;
				if (checkRowFillStatus(row)) {
					resizeRow(row);
					if (callback) callback();
				} else {
					appendRow(row, rowid, callback);
				}
			}
		}
		theImg.onerror = function() {
			console.log('Error photo: ',this.dataset.photoId);
			this.src = '/cosmo_blog/Public/img/default_150_150.png';
			findPhoto(this.dataset.photoId).url = '/cosmo_blog/Public/img/default_150_150.png';
		}
		// theImg.src = thePhoto.url;
		var theItem = document.createElement('div');
		theItem.className = "photo-item";
		row.appendChild(theItem);
		theItem.appendChild(theImg);
		// $(theItem).data('id', thePhoto.id);
		theItem.dataset.photoId = thePhoto.id;
		var theDetail = document.createElement('div');
		theDetail.className = 'detail';
		theDetail.innerHTML = thePhoto.title;
		theItem.appendChild(theDetail);
		thePhoto.row = i;
		imgsAppended.push(theImg);
		photosAppended.push(thePhoto);
		$(theImg).wrap(document.createElement('span'));
		$(theItem).click(function(){showPhotoInModal(this.dataset.photoId)});
	}
	for (var i = 0; i < imgsAppended.length; i++) {
		imgsAppended[i].src = photosAppended[i].url;
	}
}

function checkRowLoad(row) {
	if (typeof row == 'number') {
		row = $('.photo-row')[row];
	}
	row = $(row);
	var imgs = row.find('img');
	for (var i = 0; i < imgs.length; i++) {
		if (!isImgLoaded(imgs[i])) {
			return false;
		}
	}
	return true;
}

/**
 * 添加IMG_LOAD_CNT数量的 photo-item 并加载完成后
 * 检查本行的长度，若超长则逐个从末尾移除元素，最后返回本行是否已满
 * @param  {number|dom|$selector->$selector} row
 * @return {bool} true:本行已满 | false:本行未满
 */
function checkRowFillStatus(row) {
	if (typeof row == 'number') {
		row = $('.photo-row')[row];
	}
	row = $(row);

	var referWidth = getReferWidth();

	function removeOverFlow() {
		if (row.width() > referWidth && row.find('.photo-item').length > 1) {
			var theItem = row.find('.photo-item:last');
			var thePhotoId = parseInt(theItem.find('img').attr('id').replace('photo',''));
			theItem.remove();
			findPhoto(thePhotoId).row = -1;
			removeOverFlow();
		}
	}

	if (row.width() > referWidth) {
		removeOverFlow();
		return true;
	} else if (getUnassignedPhotos().length == 0) {
		return true;
	} else {
		return false;
	}
}

function resizeRow(row) {
	if (typeof row == 'number') {
		row = $('.photo-row')[row];
	}
	row = $(row);

	var rate = parseFloat(row.width())/parseFloat(getReferWidth());
	row.removeClass('test');
	var resizeHeight = parseFloat(row.find('.photo-item img').height())/rate;
	if (rate > 0.5) row.find('.photo-item img').css('height', resizeHeight + 'px');
}

function fillRowGap(row, standardWidth) {
	if (typeof row == 'number') {
		row = $('.photo-row')[row];
	}
	row = $(row);

	var gap = standardWidth - row.width();
	console.log('row gap: ',standardWidth,' - ',row.width(),' = ',gap);
	if (gap > parseFloat(row.width())*0.2) return;
	var photoItems = row.find('.photo-item');
	var widestItem = photoItems[0];
	for (var i = 1; i < photoItems.length; i++) {
		if ($(photoItems[i]).width() > $(widestItem).width()) {
			widestItem = photoItems[i];
		}
	}
	var fixedWidth = $(widestItem).width() + gap;
	$(widestItem).find('img').css('width', fixedWidth + 'px');
}

function addRowAction (row) {
	isLoading = true;
	$('#refresh-button').hide();
	$('#loading-indicator').show();
	var rows = $('#photo-list').find('.photo-row');
	if (rows.length < curr_rows && getUnassignedPhotos().length != 0) {
		addRow(addRowAction);
	} else {
		var standardWidth = 0;
		for (var i = 0; i < rows.length; i++) {
			if (standardWidth < $(rows[i]).width())
				standardWidth = $(rows[i]).width();
		}
		for (var i = 0; i < rows.length; i++) {
			fillRowGap(rows[i], standardWidth);
		}
		isLoading = false;
		$('#loading-indicator').hide();
		if (getUnassignedPhotos().length != 0) $('#refresh-button').show();
		else $('#refresh-button').hide();
	}
}

function initListView() {
	if (isLoading) return;
	$('#photo-list > *').remove();
	$.each(photos, function() {
		this.row = -1;
	});
	addRowAction();
}

function continueListView() {
	if (isLoading) return;
	if (getUnassignedPhotos().length == 0) return;
	curr_rows += ROW_STEP;
	addRowAction();
}

function isImgLoaded(img) {
	return (img.readyState === 'complete' || img.complete === true) && (typeof img.src == "string") && (img.src != "");
}
</script>
<script type="text/javascript">
function dragImage(open, outer, inner) {
	function getElem(id) {
		return document.getElementById(id);
	}

	function trimPX(_px) {
		if (_px == null || _px == "") return 0;
		return parseInt(_px.substr(0, _px.lastIndexOf("px")));
	}

	function hitInRect(hitX, hitY, rcLeft, rcTop, rcWidth, rcHeight) {
		return (hitX >= rcLeft && hitX < rcLeft + rcWidth && hitY >= rcTop && hitY < rcTop + rcHeight);
	}

	function getTop(e){ 
		var offset=e.offsetTop; 
		if(e.offsetParent!=null) offset+=getTop(e.offsetParent); 
		return offset; 
	}
	function getLeft(e){ 
		var offset=e.offsetLeft; 
		if(e.offsetParent!=null) offset+=getLeft(e.offsetParent); 
		return offset; 
	}

	function outerDiv() {
		if (outer) return outer;
		return getElem("_outerDiv");
	}

	function imageDiv() {
		if (inner) return inner;
		return getElem("_imageDiv");
	}

	var dragging = false;
	var startTop = 0; // top is a Key Word in Chrome and Opera
	var startLeft = 0;
	var dragPosY = 0;
	var dragPosX = 0;

	function initPage() {
		outerDiv().onmousedown = function(event) {
			console.log('down');
			startTop = trimPX(imageDiv().style.top);
			startLeft = trimPX(imageDiv().style.left);
			var width = trimPX(imageDiv().style.width);
			var height = trimPX(imageDiv().style.height);

			if (hitInRect(event.clientX, event.clientY, getLeft(imageDiv()), getTop(imageDiv()), width, height)) {
				console.log('hit');
				dragging = true;
				dragPosX = event.clientX;
				dragPosY = event.clientY;
				event.preventDefault(); // disable default behavior of browser
			}
		};

		outerDiv().onmousemove = function(event) {
			if (dragging) {
				var offsetX = event.clientX - dragPosX;
				var offsetY = event.clientY - dragPosY;
				var topOut = trimPX(imageDiv().style.top) < 0;
				var bottomOut = trimPX(imageDiv().style.top) + trimPX(imageDiv().style.height) > $(outerDiv()).height();
				var leftOut = trimPX(imageDiv().style.left) < 0;
				var rightOut = trimPX(imageDiv().style.left) + trimPX(imageDiv().style.width) > $(outerDiv()).width();
				if (offsetY > 0) {
					if (topOut) {
						imageDiv().style.top = parseInt(startTop) + offsetY + "px";
					} else {
						if (bottomOut) {
							imageDiv().style.top = 0;
						}
					}
				}
				if (offsetY < 0) {
					if (bottomOut) {
						imageDiv().style.top = parseInt(startTop) + offsetY + "px";
					} else {
						if (topOut) {
							imageDiv().style.top = $(outerDiv()).height() - trimPX(imageDiv().style.height) + 'px';
						}
					}
				}
				if (offsetX > 0) {
					if (leftOut) {
						imageDiv().style.left = parseInt(startLeft) + offsetX + "px";
					} else {
						if (rightOut) {
							imageDiv().style.left = 0;
						}
					}
				}
				if (offsetX < 0) {
					if (rightOut) {
						imageDiv().style.left = parseInt(startLeft) + offsetX + "px";
					} else {
						if (leftOut) {
							imageDiv().style.left = $(outerDiv()).width() - trimPX(imageDiv().style.width) + 'px';
						}
					}
				}
			}
			event.preventDefault();
		};

		outerDiv().onmouseup = function(event) {
			dragging = false;
			event.preventDefault();
		};
	}

	function uninitPage() {
		outerDiv().onmousedown = null;
		outerDiv().onmousemove = null;
		outerDiv().onmouseup = null;
	}

	console.log('drag:',open);
	if (open === false) uninitPage();
	else initPage();
}
</script>
<script type="text/javascript">
// This script handles the scroll events
// I just don't use this by now. Too much performance cost on this.
function windowScroll() {
	function scrollsTop() {
		var scrollHeight = document.documentElement.scrollHeight;
		var clientHeight = document.documentElement.clientHeight;
		var scrollTop = document.documentElement.scrollTop;
		if (scrollTop <= 0) return true;
		return false;
	}
	function scrollsBottom() {
		var scrollHeight = document.documentElement.scrollHeight;
		var clientHeight = document.documentElement.clientHeight;
		var scrollTop = document.body.scrollTop;
		if (scrollTop + clientHeight >= scrollHeight) return true;
		return false;
	}

	var bottomHit = false;
	if (scrollsBottom()) bottomHit = true;

	$(window).scroll(function() {
		if (!scrollLoadAllowed) return;
		if (scrollsBottom()) {
			if (!bottomHit) {
				console.warn('hits bottom!');
				bottomHit = true;
				setTimeout(function() {
					if (bottomHit && scrollLoadAllowed) continueListView();
				},
				scrollLoadDelay);
			}
		} else {
			bottomHit = false;
		}
	});
}
</script>
<script type="text/javascript">
var documentIsReady = false;
$(document).ready(function() {
	var previousPhotoListContainerWidth = null;
	$('#photo-list-container').resize(function() {
		var canResize = previousPhotoListContainerWidth != null && previousPhotoListContainerWidth != 0 && previousPhotoListContainerWidth != $(this).width();
		previousPhotoListContainerWidth = $(this).width();
		if (canResize) {
			console.warn('photo-list-container resize:'+$(this).width()+'×'+$(this).height());
			initListView();
		}
	});
	documentIsReady = true;
});

$('.refresh-button').click(function(){
	continueListView();
});

var modalPhotoSize = {
	actualWidth : 0,
	actualHeight : 0,
	resizeWidth : 0,
	resizeHeight : 0,
	containerWidth : 0,
	containerHeight : 0,
	zoom : false
}
var modalPhotoId = -1;

function dragModalImage(drag) {
	modalPhotoSize.zoom = drag;
	dragImage(drag, document.getElementById('modal-photo-container'), document.getElementById('modal-photo'));
	if (drag) {
		$('#modal-photo-zoom span,i').removeClass('fa-search-plus');
		$('#modal-photo-zoom span,i').addClass('fa-search-minus');
		$('#detail-modal .photo img').css('cursor', 'move');
		$('#detail-modal .photo-description').hide();
		$('#detail-modal .modal-nav').hide();
	} else {
		$('#modal-photo-zoom span,i').removeClass('fa-search-minus');
		$('#modal-photo-zoom span,i').addClass('fa-search-plus');
		$('#detail-modal .photo img').css('cursor', 'auto');
		$('#detail-modal .photo-description').show();
		$('#detail-modal .modal-nav').show();
	}
}

function showPhotoInModal(id) {
	var thePhoto = findPhoto(id);
	modalPhotoId = thePhoto.id;
	modalPhotoSize.actualWidth = 0;
	modalPhotoSize.actualHeight = 0;
	modalPhotoSize.containerWidth = 0;
	modalPhotoSize.containerHeight = 0;
	$('#detail-modal .modal-body').css('visibility', 'hidden');
	$('#detail-modal').modal('show');
	var standardSize = $('#detail-modal').height() - parseInt($('#detail-modal .modal-body').css('margin-top').replace('px','')) - parseInt($('#detail-modal .modal-body').css('margin-bottom').replace('px',''))
	$('#detail-modal .photo-container').css('width', standardSize + 'px');
	$('#detail-modal .photo-container').css('height', standardSize + 'px');
	$('#detail-modal .photo').css('width', 'auto');
	$('#detail-modal .photo').css('height', 'auto');
	$('#detail-modal .photo-description').html(thePhoto.title);
	var modalImg = $('#detail-modal .photo img')[0];
	modalImg.dataset.isLoad = false;
	$(modalImg).css('width','0px');
	$(modalImg).css('height','0px');
	modalImg.src = "";
	dragModalImage(false);
	modalImg.onload = function() {
	$(modalImg).css('width','auto');
	$(modalImg).css('height','auto');
		console.log('onload:',this.src);
		this.dataset.isLoad = true;
	}
	modalImg.onerror = function() {
		this.src = '/cosmo_blog/Public/img/default_150_150.png';
	}
	$(modalImg).resize(function(){
		var presetActualWidth = parseFloat($('#detail-modal .photo img').width());
		var presetActualHeight = parseFloat($('#detail-modal .photo img').height());
		if (!parseBool(this.dataset.isLoad) || presetActualHeight==0 || presetActualWidth==0) return;
		this.dataset.isLoad = false;
		modalPhotoSize.actualWidth = presetActualWidth;
		modalPhotoSize.actualHeight = presetActualHeight;
		modalPhotoSize.containerWidth = parseFloat($('#detail-modal .photo-container').width());
		modalPhotoSize.containerHeight = parseFloat($('#detail-modal .photo-container').height());
		modalPhotoSize.resizeWidth = modalPhotoSize.actualWidth;
		modalPhotoSize.resizeHeight = modalPhotoSize.actualHeight;
		if (modalPhotoSize.resizeWidth > modalPhotoSize.containerWidth) {
			var rate = modalPhotoSize.containerWidth/modalPhotoSize.resizeWidth;
			modalPhotoSize.resizeWidth = modalPhotoSize.containerWidth;
			modalPhotoSize.resizeHeight = rate * modalPhotoSize.resizeHeight;
		}
		if (modalPhotoSize.resizeHeight > modalPhotoSize.containerHeight) {
			var rate = modalPhotoSize.containerHeight/modalPhotoSize.resizeHeight;
			modalPhotoSize.resizeWidth = rate * modalPhotoSize.resizeWidth;
			modalPhotoSize.resizeHeight = modalPhotoSize.containerHeight;
		}
		$('#detail-modal .photo img').css('width', modalPhotoSize.resizeWidth + 'px');
		$('#detail-modal .photo img').css('height', modalPhotoSize.resizeHeight + 'px');
		var resizeTop = (modalPhotoSize.containerHeight - modalPhotoSize.resizeHeight) / 2;
		var resizeLeft = (modalPhotoSize.containerWidth - modalPhotoSize.resizeWidth) / 2;
		$('#detail-modal .photo').css('width', modalPhotoSize.resizeWidth + 'px');
		$('#detail-modal .photo').css('height', modalPhotoSize.resizeHeight + 'px');
		$('#detail-modal .photo').css('top', resizeTop + 'px');
		$('#detail-modal .photo').css('left', resizeLeft + 'px');

		$('#detail-modal .modal-body').css('visibility', 'visible');
	});
	modalImg.src = thePhoto.url;
}

function toggleModalPhotoZoom() {
	var resizeWidth = 0;
	var resizeHeight = 0;
	if (modalPhotoSize.zoom) {
		resizeWidth = modalPhotoSize.resizeWidth;
		resizeHeight = modalPhotoSize.resizeHeight;
	} else {
		resizeWidth = modalPhotoSize.actualWidth;
		resizeHeight = modalPhotoSize.actualHeight;
	}
	$('#detail-modal .photo img').css('width', resizeWidth + 'px');
	$('#detail-modal .photo img').css('height', resizeHeight + 'px');
	var resizeTop = (modalPhotoSize.containerHeight - resizeHeight) / 2;
	var resizeLeft = (modalPhotoSize.containerWidth - resizeWidth) / 2;
	$('#detail-modal .photo').css('width', resizeWidth + 'px');
	$('#detail-modal .photo').css('height', resizeHeight + 'px');
	$('#detail-modal .photo').css('top', resizeTop + 'px');
	$('#detail-modal .photo').css('left', resizeLeft + 'px');
	dragModalImage(!modalPhotoSize.zoom);
}

function gotoPrev() {
	var thePhoto = findPhoto(modalPhotoId);
	var index = photos.indexOf(thePhoto);
	if (index <= 0) return;
	thePhoto = photos[index - 1];
	showPhotoInModal(thePhoto.id);
}
function gotoNext() {
	var thePhoto = findPhoto(modalPhotoId);
	var index = photos.indexOf(thePhoto);
	if (index >= photos.length - 1) return;
	thePhoto = photos[index + 1];
	showPhotoInModal(thePhoto.id);
}
</script>

		</div>
	</body>
	
	<script type="text/javascript" src="/cosmo_blog/Public/js/main.js"></script>
<script type="text/javascript" src="/cosmo_blog/Public/js/libs/jquery.ba-resize.min.js"></script>
<!-- <script type="text/javascript" src="http://libs.baidu.com/lesscss/1.3.0/less.min.js"></script>
<script type="text/javascript">less.watch();</script> -->
</html>