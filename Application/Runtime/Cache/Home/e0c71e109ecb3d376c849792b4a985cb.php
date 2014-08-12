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
</div>
		<div class="main-container">
			<link rel="stylesheet" type="text/css" href="/cosmo_blog//Public/css/page-flag.css">
<style type="text/css">

.page-flag-container {
	left: 100px;
}
.page-flag {
	border-color: transparent #FF3366;
}

.catagory-list-container {
	padding-left: 100px;
	padding-right: 100px;
	margin-top: 50px;
}
.catagory-item {
	margin-bottom: 20px;
}
.catagory-item:last-child {
	margin-bottom: 0px;
}
.catagory-item-header {
	margin-bottom: 10px;
	font-size: 20px;
	color: #fff;
	text-shadow: 0 0 1px #000;
	cursor: pointer;
	padding: 3px;
	padding-left: 10px;

	user-select: none;
	-moz-user-select: none;
	-webkit-user-select: none;
	-o-user-select: none;
	-ms-user-select: none;
}
.catagory-item-header:hover {
	background-color: rgba(0,0,0, 0.25);
}
.catagory-item-header .fa {
	margin-right: 10px;
}
.catagory-item-body {
}
.gallary-list {
	padding-left: 5px;
}
.gallary-item {
	/*margin-left: 0px;
	margin-top: 0px;
	margin-bottom: 10px;
	margin-right: auto;*/

	display: block;
	float: left;

	margin: 5px;
	width: 150px;
	height: 170px;
	line-height: 170px;

	box-shadow: 0px 1px 3px 0px #000;
}
.gallary-item > div {
	position: relative;
	width: inherit;
	height: inherit;
	line-height: inherit;
	overflow: hidden;
}
.gallary-cover {
	width: 100%;
	height: 100%;
	position: absolute;
	overflow: hidden;
	background-color: #000033;
	line-height: inherit;
	text-align: center;
	vertical-align: middle;
	white-space: nowrap;
}
/*.gallary-cover:before, .gallary-cover:after {
	content: "aaa";
}*/
.gallary-cover .img-container {
	width: 10000px;
	height: 100%;
	left: 50%;
	margin-left: -5000px;
	position: absolute;
	text-align: center;
}
/* Adjustment */
.img-container img {
	margin-left: -4px;
}
.gallary-cover .img-container:before, .gallary-cover .img-container:after {
	content: "";
}
.gallary-cover img {
	width: 150px;
	height: auto;
}
.gallary-cover-mask {
	width: 100%;t
	height: 100%;
	background-image: url(/cosmo_blog/Public/img/glass_mask.png);
	background: -moz-linear-gradient(left top,  rgba(255,255,255,0.5) 0%, rgba(255,255,255,0.1) 50%, rgba(255,255,255,0) 51%, rgba(255,255,255,0.5) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,rgba(255,255,255,0.5)), color-stop(50%,rgba(255,255,255,0.1)), color-stop(51%,rgba(255,255,255,0)), color-stop(100%,rgba(255,255,255,0.5))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(left top,  rgba(255,255,255,0.5) 0%,rgba(255,255,255,0.1) 50%,rgba(255,255,255,0) 51%,rgba(255,255,255,0.5) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(left top,  rgba(255,255,255,0.5) 0%,rgba(255,255,255,0.1) 50%,rgba(255,255,255,0) 51%,rgba(255,255,255,0.5) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(left top,  rgba(255,255,255,0.5) 0%,rgba(255,255,255,0.1) 50%,rgba(255,255,255,0) 51%,rgba(255,255,255,0.5) 100%); /* IE10+ */
	background: linear-gradient(to right bottom,  rgba(255,255,255,0.5) 0%,rgba(255,255,255,0.1) 50%,rgba(255,255,255,0) 51%,rgba(255,255,255,0.5) 100%); /* W3C */
	background-image: url(/cosmo_blog/Public/img/glass_mask.png);
	visibility: hidden;
	background-size: cover;
	position: absolute;

}
.gallary-item:hover .gallary-cover-mask {
	visibility: visible;
}

@keyframes gallary-cover-description-show {
	0% {
		bottom: -30px;
	}
	100% {
		bottom: 0px;
	}
}
@-webkit-keyframes gallary-cover-description-show {
	0% {
		bottom: -30px;
	}
	100% {
		bottom: 0px;
	}
}
@-moz-keyframes gallary-cover-description-show {
	0% {
		bottom: -30px;
	}
	100% {
		bottom: 0px;
	}
}
@-o-keyframes gallary-cover-description-show {
	0% {
		bottom: -30px;
	}
	100% {
		bottom: 0px;
	}
}
@keyframes gallary-cover-description-hide {
	0% {
		bottom: 0px;
	}
	100% {
		bottom: -30px;
	}
}
@-webkit-keyframes gallary-cover-description-hide {
	0% {
		bottom: 0px;
	}
	100% {
		bottom: -30px;
	}
}
@-moz-keyframes gallary-cover-description-hide {
	0% {
		bottom: 0px;
	}
	100% {
		bottom: -30px;
	}
}
@-o-keyframes gallary-cover-description-hide {
	0% {
		bottom: 0px;
	}
	100% {
		bottom: -30px;
	}
}
.gallary-cover-description {
	position: absolute;
	width: 100%;
	height: 30px;
	line-height: 30px;
	vertical-align: middle;
	color: #fff;
	white-space: nowrap;
	background-color: rgba(0,0,0,0.4);
	padding-left: 5px;
	bottom: -30px;

	animation: gallary-cover-description-hide 0.2s forwards;
	-webkit-animation: gallary-cover-description-hide 0.2s forwards;
	-moz-animation: gallary-cover-description-hide 0.2s forwards;
	-o-animation: gallary-cover-description-hide 0.2s forwards;
	-ms-animation: gallary-cover-description-hide 0.2s forwards;
}
.gallary-item:hover .gallary-cover-description {
	animation: gallary-cover-description-show 0.2s forwards;
	-webkit-animation: gallary-cover-description-show 0.2s forwards;
	-moz-animation: gallary-cover-description-show 0.2s forwards;
	-o-animation: gallary-cover-description-show 0.2s forwards;
	-ms-animation: gallary-cover-description-show 0.2s forwards;
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
<div class="catagory-list-container">
	<?php if(is_array($gallaries)): $i = 0; $__LIST__ = $gallaries;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): $mod = ($i % 2 );++$i;?><div class="catagory-item">
			<div id="catagory-header-<?php echo ($tag["tag"]); ?>" class="catagory-item-header" data-toggle="collapse" data-target="#catagory-body-<?php echo ($tag["tag"]); ?>"><span class="fa fa-tag"></span><?php echo (translatetag("Gallary",$tag["tag"])); ?></div>
			<div id="catagory-body-<?php echo ($tag["tag"]); ?>" class="collapse in catagory-item-body">
				<div class="gallary-list">
					<?php if(is_array($tag["gallaries"])): $i = 0; $__LIST__ = $tag["gallaries"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gallary): $mod = ($i % 2 );++$i;?><a class="gallary-item" href="<?php echo U('/gallery/'.$gallary['id']);?>">
							<div>
								<div class="gallary-cover">
									<div class="img-container">
										<span><img src="<?php echo ($gallary["cover_url"]); ?>" /></span>
									</div>
								</div>
								<div class="gallary-cover-mask"></div>
								<div class="gallary-cover-description">
									<span><?php echo ($gallary["title"]); ?></span>
								</div>
							</div>
						</a><?php endforeach; endif; else: echo "" ;endif; ?>
					<div style="clear:both;"></div>
				</div>
			</div>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>

<script type="text/javascript">
$('.gallary-item img').load(function (argument) {
	var whr = parseFloat($('.gallary-item').width())/parseFloat($('.gallary-item').height());
	if (parseFloat($(this).width())/parseFloat($(this).height()) > whr) {
		$(this).css('height', $('.gallary-item').height() + 'px');
		$(this).css('width', 'auto');
	} else {
		$(this).css('height', 'auto');
		$(this).css('width', $('.gallary-item').width() + 'px');
	}
});
</script>

		</div>
	</body>
	
	<script type="text/javascript" src="/cosmo_blog/Public/js/main.js"></script>
<script type="text/javascript" src="/cosmo_blog/Public/js/libs/jquery.ba-resize.min.js"></script>
<!-- <script type="text/javascript" src="http://libs.baidu.com/lesscss/1.3.0/less.min.js"></script>
<script type="text/javascript">less.watch();</script> -->
</html>