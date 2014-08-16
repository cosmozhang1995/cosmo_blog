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

.main-container {
	overflow: hidden;
}

@media screen and (max-width: 1150px) {
	.left-fan-container {
		display: none;
	}
	.main-container {
		padding-left: 0px;
	}
}

.article-list-container {
	width: auto;
	margin: 0 auto;
}

.article-list {
	width: auto;
	margin: 0 auto;
	clear: both;
}

.article-item-container {
	position: relative;
	top: 50px;
	margin-left: 0px;
	margin-right: 0px;
	width: auto;
	height: 120px;
	z-index: 0;
	overflow-x: visible;
}

@media screen and (min-width: 101px) and (max-width: 150px) { 
	.article-item, .article-item-skew, .article-item-container, .article-list, .article-list-container {
		width: 50px;
	}
	.article-item-skew {
		transform: skew(0deg, -67.380135052deg);
		-ms-transform: skew(0deg, -67.380135052deg);
		-o-transform: skew(0deg, -67.380135052deg);
		-moz-transform: skew(0deg, -67.380135052deg);
		-webkit-transform: skew(0deg, -67.380135052deg);
	}
}
@media screen and (min-width: 151px) and (max-width: 200px) { 
	.article-item, .article-item-skew, .article-item-container, .article-list, .article-list-container {
		width: 50px;
	}
	.article-item-skew {
		transform: skew(0deg, -67.380135052deg);
		-ms-transform: skew(0deg, -67.380135052deg);
		-o-transform: skew(0deg, -67.380135052deg);
		-moz-transform: skew(0deg, -67.380135052deg);
		-webkit-transform: skew(0deg, -67.380135052deg);
	}
}
@media screen and (min-width: 201px) and (max-width: 250px) { 
	.article-item, .article-item-skew, .article-item-container, .article-list, .article-list-container {
		width: 100px;
	}
	.article-item-skew {
		transform: skew(0deg, -50.1944289077deg);
		-ms-transform: skew(0deg, -50.1944289077deg);
		-o-transform: skew(0deg, -50.1944289077deg);
		-moz-transform: skew(0deg, -50.1944289077deg);
		-webkit-transform: skew(0deg, -50.1944289077deg);
	}
}
@media screen and (min-width: 251px) and (max-width: 300px) { 
	.article-item, .article-item-skew, .article-item-container, .article-list, .article-list-container {
		width: 150px;
	}
	.article-item-skew {
		transform: skew(0deg, -38.6598082541deg);
		-ms-transform: skew(0deg, -38.6598082541deg);
		-o-transform: skew(0deg, -38.6598082541deg);
		-moz-transform: skew(0deg, -38.6598082541deg);
		-webkit-transform: skew(0deg, -38.6598082541deg);
	}
}
@media screen and (min-width: 301px) and (max-width: 350px) { 
	.article-item, .article-item-skew, .article-item-container, .article-list, .article-list-container {
		width: 200px;
	}
	.article-item-skew {
		transform: skew(0deg, -30.9637565321deg);
		-ms-transform: skew(0deg, -30.9637565321deg);
		-o-transform: skew(0deg, -30.9637565321deg);
		-moz-transform: skew(0deg, -30.9637565321deg);
		-webkit-transform: skew(0deg, -30.9637565321deg);
	}
}
@media screen and (min-width: 351px) and (max-width: 400px) { 
	.article-item, .article-item-skew, .article-item-container, .article-list, .article-list-container {
		width: 200px;
	}
	.article-item-skew {
		transform: skew(0deg, -30.9637565321deg);
		-ms-transform: skew(0deg, -30.9637565321deg);
		-o-transform: skew(0deg, -30.9637565321deg);
		-moz-transform: skew(0deg, -30.9637565321deg);
		-webkit-transform: skew(0deg, -30.9637565321deg);
	}
}
@media screen and (min-width: 401px) and (max-width: 50.19442890770px) { 
	.article-item, .article-item-skew, .article-item-container, .article-list, .article-list-container {
		width: 200px;
	}
	.article-item-skew {
		transform: skew(0deg, -30.9637565321deg);
		-ms-transform: skew(0deg, -30.9637565321deg);
		-o-transform: skew(0deg, -30.9637565321deg);
		-moz-transform: skew(0deg, -30.9637565321deg);
		-webkit-transform: skew(0deg, -30.9637565321deg);
	}
}
@media screen and (min-width: 50.19442890771px) and (max-width: 500px) { 
	.article-item, .article-item-skew, .article-item-container, .article-list, .article-list-container {
		width: 200px;
	}
	.article-item-skew {
		transform: skew(0deg, -30.9637565321deg);
		-ms-transform: skew(0deg, -30.9637565321deg);
		-o-transform: skew(0deg, -30.9637565321deg);
		-moz-transform: skew(0deg, -30.9637565321deg);
		-webkit-transform: skew(0deg, -30.9637565321deg);
	}
}
@media screen and (min-width: 501px) and (max-width: 600px) { 
	.article-item, .article-item-skew, .article-item-container, .article-list, .article-list-container {
		width: 200px;
	}
	.article-item-skew {
		transform: skew(0deg, -30.9637565321deg);
		-ms-transform: skew(0deg, -30.9637565321deg);
		-o-transform: skew(0deg, -30.9637565321deg);
		-moz-transform: skew(0deg, -30.9637565321deg);
		-webkit-transform: skew(0deg, -30.9637565321deg);
	}
}
@media screen and (min-width: 601px) and (max-width: 799px) { 
	.article-item, .article-item-skew, .article-item-container, .article-list, .article-list-container {
		width: 200px;
	}
	.article-item-skew {
		transform: skew(0deg, -30.9637565321deg);
		-ms-transform: skew(0deg, -30.9637565321deg);
		-o-transform: skew(0deg, -30.9637565321deg);
		-moz-transform: skew(0deg, -30.9637565321deg);
		-webkit-transform: skew(0deg, -30.9637565321deg);
	}
}
@media screen and (min-width: 800px) and (max-width: 1000px) {
	.article-item, .article-item-skew, .article-item-container, .article-list, .article-list-container {
		width: 600px;
	}
	.article-item-skew {
		transform: skew(0deg, -11.309932474deg);
		-ms-transform: skew(0deg, -11.309932474deg);
		-o-transform: skew(0deg, -11.309932474deg);
		-moz-transform: skew(0deg, -11.309932474deg);
		-webkit-transform: skew(0deg, -11.309932474deg);
	}
}
@media screen and (min-width: 1001px) and (max-width: 1200px) { 
	.article-item, .article-item-skew, .article-item-container, .article-list, .article-list-container {
		width: 600px;
	}
	.article-item-skew {
		transform: skew(0deg, -11.309932474deg);
		-ms-transform: skew(0deg, -11.309932474deg);
		-o-transform: skew(0deg, -11.309932474deg);
		-moz-transform: skew(0deg, -11.309932474deg);
		-webkit-transform: skew(0deg, -11.309932474deg);
	}
}
@media screen and (min-width: 1201px) and (max-width: 1400px) { 
	.article-item, .article-item-skew, .article-item-container, .article-list, .article-list-container {
		width: 600px;
	}
	.article-item-skew {
		transform: skew(0deg, -11.309932474deg);
		-ms-transform: skew(0deg, -11.309932474deg);
		-o-transform: skew(0deg, -11.309932474deg);
		-moz-transform: skew(0deg, -11.309932474deg);
		-webkit-transform: skew(0deg, -11.309932474deg);
	}
}
@media screen and (min-width: 1401px) and (max-width: 1600px) { 
	.article-item, .article-item-skew, .article-item-container, .article-list, .article-list-container {
		width: 800px;
	}
	.article-item-skew {
		transform: skew(0deg, -8.53076560995deg);
		-ms-transform: skew(0deg, -8.53076560995deg);
		-o-transform: skew(0deg, -8.53076560995deg);
		-moz-transform: skew(0deg, -8.53076560995deg);
		-webkit-transform: skew(0deg, -8.53076560995deg);
	}
}
@media screen and (min-width: 1601px) and (max-width: 1800px) { 
	.article-item, .article-item-skew, .article-item-container, .article-list, .article-list-container {
		width: 1000px;
	}
	.article-item-skew {
		transform: skew(0deg, -6.84277341263deg);
		-ms-transform: skew(0deg, -6.84277341263deg);
		-o-transform: skew(0deg, -6.84277341263deg);
		-moz-transform: skew(0deg, -6.84277341263deg);
		-webkit-transform: skew(0deg, -6.84277341263deg);
	}
}
@media screen and (min-width: 1801px) and (max-width: 2000px) { 
	.article-item, .article-item-skew, .article-item-container, .article-list, .article-list-container {
		width: 1200px;
	}
	.article-item-skew {
		transform: skew(0deg, -5.7105931375deg);
		-ms-transform: skew(0deg, -5.7105931375deg);
		-o-transform: skew(0deg, -5.7105931375deg);
		-moz-transform: skew(0deg, -5.7105931375deg);
		-webkit-transform: skew(0deg, -5.7105931375deg);
	}
}
@media screen and (min-width: 2001px) and (max-width: 2200px) { 
	.article-item, .article-item-skew, .article-item-container, .article-list, .article-list-container {
		width: 1400px;
	}
	.article-item-skew {
		transform: skew(0deg, -4.89909245379deg);
		-ms-transform: skew(0deg, -4.89909245379deg);
		-o-transform: skew(0deg, -4.89909245379deg);
		-moz-transform: skew(0deg, -4.89909245379deg);
		-webkit-transform: skew(0deg, -4.89909245379deg);
	}
}
@media screen and (min-width: 2201px) and (max-width: 2400px) { 
	.article-item, .article-item-skew, .article-item-container, .article-list, .article-list-container {
		width: 1600px;
	}
	.article-item-skew {
		transform: skew(0deg, -4.28915332882deg);
		-ms-transform: skew(0deg, -4.28915332882deg);
		-o-transform: skew(0deg, -4.28915332882deg);
		-moz-transform: skew(0deg, -4.28915332882deg);
		-webkit-transform: skew(0deg, -4.28915332882deg);
	}
}
@media screen and (min-width: 2401px) and (max-width: 2400px) { 
	.article-item, .article-item-skew, .article-item-container, .article-list, .article-list-container {
		width: 1800px;
	}
	.article-item-skew {
		transform: skew(0deg, -3.81407483429deg);
		-ms-transform: skew(0deg, -3.81407483429deg);
		-o-transform: skew(0deg, -3.81407483429deg);
		-moz-transform: skew(0deg, -3.81407483429deg);
		-webkit-transform: skew(0deg, -3.81407483429deg);
	}
}

.article-item, .article-item-skew {
	margin-left: 0px;
	margin-right: 0px;
	height: 50px;
	border-radius: 3px;
}
.article-item {
	display: block;
	position: relative;
	background-color: #00CC66;
	z-index: 1;
	box-shadow: 0 0 7px -3px #000, 85px 0 50px -100px #000 inset, -85px 0 50px -100px #000 inset;
	padding-left: 20px;
	padding-right: 20px;
	line-height: 50px;
	vertical-align: text-bottom;
	white-space: nowrap;
	overflow: hidden;
	cursor: pointer;
}
.article-item-skew {
	position: relative;
	top: -50px;
	z-index: -1;
	background-color: #009966;
	transform-origin: top right;
	-ms-transform-origin: top right;
	-o-transform-origin: top right;
	-moz-transform-origin: top right;
	-webkit-transform-origin: top right;
	box-shadow: 0 0 7px -3px #000;
}
<?php if($page != 1): ?>.article-item-container:first-child .article-item {
	padding-left: 10020px;
	margin-left: -10000px;
	margin-right: 0px;
	width: auto;
}<?php endif; ?>
<?php if($page != $pt): ?>.article-item-container:last-child .article-item {
	padding-right: 10020px;
	margin-right: -10000px;
	margin-left: 0px;
	width: auto;
}<?php endif; ?>
.article-item-container:last-child .article-item-skew {
	display: none;
}
.article-item span {
	display: inline-block;
	margin-left: 5px;
	margin-right: 5px;
	/*
	margin-bottom: 5px;
	margin-top: 5px;
	*/
}
.article-item .article-title {
	font-size: 26px;
	color: #fff;
	text-shadow: rgba(0,0,0,0.5) 0 1px 1px;
}
.article-item .article-time {
	color: #ddd;
}

.article-item:hover {
	background-color: #00FF66;
}

.nav-arr-container {
	display: block;
	z-index: 10;
}

.nav-arr {
	position: relative;
	font-size: 100px;
	height: 0px;
	color: rgba(128,128,128,0.5);
	text-decoration: none;
	text-shadow: 1px 1px 2px #00CC66, 0 0 0 #000;
	z-index: 20;
}

.nav-arr:link {
	color: rgba(128,128,128,0.5);
	text-decoration: none;
	text-shadow: 1px 1px 2px #00CC66, 0 0 0 #000;
}
.nav-arr:active {
	color: rgba(128,128,128,0.5);
	text-decoration: none;
	text-shadow: 1px 1px 2px #00CC66, 0 0 0 #000;
}
.nav-arr:visited {
	color: rgba(128,128,128,0.5);
	text-decoration: none;
	text-shadow: 1px 1px 2px #00CC66, 0 0 0 #000;
}
.nav-arr:hover {
	color: rgba(255,255,255,0.5);
	text-decoration: none;
	text-shadow: 1px 1px 2px #fff, 0 0 0 #000;
}

.nav-prev {
	float: left;
	left: -45px;
	top: -5px;
}

.nav-next {
	float: right;
	right: -45px;
	top: -125px;
}
</style>


<div class="article-list-container">
	<div class="page-flag-container">
	<div class="page-flag-left"></div>
	<div class="page-flag-right"></div>
	<div class="page-flag"></div>
	<div class="page-flag-text">
		<h3><?php echo ($page_flag["title"]); ?></h3>
		<p><?php echo ($page_flag["subtitle"]); ?></p>
	</div>
</div>
	<div class="nav-arr-container <?php echo ($page==1?'hidden':''); ?>"><a class="nav-arr nav-prev" href=<?php echo ($page==1?'javascript:void(0);':U('/articles/p/'.($page-1).'/'.$pn)) ?>>&laquo;</a></div>
	<div class="article-list">
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="article-item-container">
				<a class="article-item button" href="<?php echo U('/article/'.$vo['id']);?>" >
					<span class="article-title"><?php echo ($vo["title"]); ?></span>
					<span class="article-time"><?php echo (translatedate($vo["create_time"])); ?></span>
					<span class="label label-info"><?php echo (translatetag("Article",$vo["tag"])); ?></span>
				</a>
				<div class="article-item-skew"></div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
	<div class="nav-arr-container <?php echo ($page==$pt?'hidden':''); ?>"><a class="nav-arr nav-next" href=<?php echo ($page==$pt?'javascript:void(0);':U('/articles/p/'.($page+1).'/'.$pn)) ?> >&raquo;</a></div>
</div>

		</div>
	</body>
	
	<script type="text/javascript" src="/cosmo_blog/Public/js/main.js"></script>
<script type="text/javascript" src="/cosmo_blog/Public/js/libs/jquery.ba-resize.min.js"></script>
<!-- <script type="text/javascript" src="http://libs.baidu.com/lesscss/1.3.0/less.min.js"></script>
<script type="text/javascript">less.watch();</script> -->
</html>