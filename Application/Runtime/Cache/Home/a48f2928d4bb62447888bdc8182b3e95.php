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
			<style type="text/css">
.resume-container {
	overflow: hidden;
	padding-bottom: 20px;
	margin: 0 150px;
	margin-top: 100px;
}
.resume-row {
	width: 100%;
}

.resume-row-info {
	box-shadow: 0 0 4px 0 #000;
	background-color: #ccccff;
	/*border-top: 1px #000 solid;*/
	padding: 10px;
	min-height: 245px;
}
.resume-row-info .photo {
	box-shadow: 0 0 4px 0 #000 inset;
	float: left;
	width: 150px;
	height: 225px;
}
.resume-row-info .photo img {
	width: 100%;
	height: 100%;
}
.resume-row-info .info {
	margin-left: 170px;
	white-space: nowrap;
}
.resume-row-info .info .item-block {
	display: -webkit-box;
	display: -moz-box;
	display: -ms-flex;
	display: -webkit-flex;
	display: flex;
}
.resume-row-info .info .item-column {
	display: inline-block;
	width: auto;
	margin-right: 10px;
	box-flex: none;
	-moz-box-flex: none;
	-webkit-box-flex: 0.0;
}
.resume-row-info .info .item-column:last-child {
	margin-right: 20px;
}
.resume-row-info .info .item-column-padder {
	display: inline-block;
	-moz-box-flex: 1 0;
	-webkit-box-flex: 1 0;
	-ms-flex: 1 0;
	-webkit-flex: 1 0;
	flex: 1 0;
}
.resume-row-info .info .item-row {
	margin-bottom: 10px;
	white-space: nowrap;
}
.resume-row-info .info .item-row:last-child {
	/*margin-bottom: 0px;*/
}
.resume-row-info .info .item {
	/*margin-right: 25px;*/
	/*width: 200px;*/
	color: #330066;
	line-height: 20px;
	vertical-align: top;
}
.resume-row-info .info .item a {
	color: inherit;
}
.resume-row-info .info .item:last-child {
	/*margin-right: 0px;*/
}
.resume-row-info .info .item .icon {
	display: block;
	width: 35px;
	height: 100%;
	text-align: center;
	float: left;
}
.resume-row-info .info .item .desc {
	display: block;
	white-space: normal;
	/*width: 100%;*/
	margin-left: 35px;
}
.resume-row-info .info .item .desc.link-in {
	white-space: nowrap;
	overflow: hidden;
	text-overflow:ellipsis;
}
/*.resume-row-info .info .item .desc.link-in a {
	width: 100%;
	white-space: nowrap;
	text-overflow:ellipsis;
}*/
.resume-row-info .info .item .fa {
	height: 20px;
	line-height: 20px;
	font-size: 20px;
	margin-right: 5px;
}
.resume-row-info .info .item .desc {
	/*display: inline-block;
	height: 20px;
	line-height: 20px;
	vertical-align: middle;*/
	font-size: 16px;
	/*margin-top: -5px;*/
}

.resume-row-skills {
	height: 280px;
	position: relative;
	width: 50%;
	left: 50%;
	top: 140px;
	/*z-index: 10;*/
}
.resume-row-skills .skill-container {
	display: inline-block;
	padding: 10px;
	border-radius: 50%;
	position: absolute;
}
.resume-row-skills .skill-container:hover {
	background-color: rgba(200,200,200,0.5);
	transform: scale(1.5);
	-webkit-transform: scale(1.5);
	-ms-transform: scale(1.5);
	-o-transform: scale(1.5);
	-moz-transform: scale(1.5);
	z-index: 1;
}
.resume-row-skills .skill {
	display: inline-block;
	border-radius: 50%;
	vertical-align: middle;
	text-align: center;
	cursor: pointer;
	box-shadow: 0 0 10px -4px #000;
}
.resume-row-skills .skill-text {
	color: white;
	text-align: center;
	display: inline-block;
	width: auto;
	height: auto;
}

.resume-row-time-line {
	position: relative;
	margin-top: 20px;
}
.resume-row-time-line .time-line {
	position: absolute;
	height: 100%;
	width: 10px;
	top: 0px;
	left: 50%;
	margin-left: -5px;
	z-index: -10;
	background-color: rgb(153,204,51);
}
.resume-row-time-line .time-line > div {
	height: 100%;
	width: 100%;
	background: rgb(225,225,225); /* Old browsers */
	background: -moz-linear-gradient(top,  rgba(225,225,225,1) 0%, rgba(225,225,225,1) 50%, rgba(225,225,225,0) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(225,225,225,1)), color-stop(50%,rgba(225,225,225,1)), color-stop(100%,rgba(225,225,225,0))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(225,225,225,1) 0%,rgba(225,225,225,1) 50%,rgba(225,225,225,0) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(225,225,225,1) 0%,rgba(225,225,225,1) 50%,rgba(225,225,225,0) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(225,225,225,1) 0%,rgba(225,225,225,1) 50%,rgba(225,225,225,0) 100%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(225,225,225,1) 0%,rgba(225,225,225,1) 50%,rgba(225,225,225,0) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e1e1e1', endColorstr='#e19696',GradientType=0 ); /* IE6-9 */
}
.resume-row-time-line .item {
	min-height: 50px;
}
.resume-row-time-line .item-title {
	text-align: center;
	margin-bottom: 20px;
}
.resume-row-time-line .item-title .title {
	display: inline-block;
	height: 22px;
	line-height: 22px;
	/*width: 150px;*/
	padding: 5px;
	background-color: rgb(150,150,150);
	color: white;
	font-family: Verdana, Geneva, sans-serif;
	border-radius: 5px;
	/*padding-top: 0px;*/
}
.resume-row-time-line .item-title .title span {
	display: inline-block;
	height: 12px;
	line-height: 12px;
	font-size: 12px;
}
.resume-row-time-line .item-foot {
	text-align: center;
	margin-bottom: 20px;
}
.resume-row-time-line .item-foot .foot {
	display: inline-block;
	height: 22px;
	line-height: 22px;
	/*width: 150px;*/
	padding: 5px;
	background-color: rgb(150,150,150);
	color: white;
	font-family: Verdana, Geneva, sans-serif;
	border-radius: 5px;
	/*padding-top: 0px;*/
}
.resume-row-time-line .item-foot .foot span {
	display: inline-block;
	height: 12px;
	line-height: 12px;
	font-size: 12px;
}
.resume-row-time-line .item {
	display: -webkit-box;      /* OLD - iOS 6-, Safari 3.1-6 */
	display: -moz-box;         /* OLD - Firefox 19- (buggy but mostly works) */
	display: -ms-flexbox;      /* TWEENER - IE 10 */
	display: -webkit-flex;     /* NEW - Chrome */
	display: flex;
}
.resume-row-time-line .item .column-middle {
	width: 20px;
	-webkit-box-flex: 0;      /* OLD - iOS 6-, Safari 3.1-6 */
	-moz-box-flex: 0;         /* OLD - Firefox 19- */
	-webkit-flex: 0;          /* Chrome */
	-ms-flex: 0;              /* IE 10 */
	flex: 0;                  /* NEW, Spec - Opera 12.1, Firefox 20+ */
}
.resume-row-time-line .item .column-left,.column-right {
	-webkit-box-flex: 1;      /* OLD - iOS 6-, Safari 3.1-6 */
	-moz-box-flex: 1;         /* OLD - Firefox 19- */
	-webkit-flex: 1;          /* Chrome */
	-ms-flex: 1;              /* IE 10 */
	flex: 1;                  /* NEW, Spec - Opera 12.1, Firefox 20+ */
}
.resume-row-time-line .item .column {
	padding: 10px;
}
.resume-row-time-line .item .column-left {
	text-align: right;
}
.resume-row-time-line .item .column-right {
	text-align: left;
}
.resume-row-time-line .item .column .quot-container {
	display: block;
	position: relative;
	padding-left: 10px;
	padding-right: 10px;
}
.resume-row-time-line .item .column .quot-container .quot-block {
	display: inline-block;
	min-height: 40px;
	border-radius: 5px;
	text-align: left;
	padding: 10px;
	min-width: 40%;
	max-width: 80%;
	cursor: pointer;
	/*padding-top: 20px;*/
}
.resume-row-time-line .item .column .quot-container .quot-arrow {
	display: inline-block;
	width: 0px;
	height: 0px;
	border-width: 10px;
	border-style: solid;
	position: absolute;
	top: 10px;
}
.resume-row-time-line .item .column-left .quot-container .quot-arrow {
	/*border-style: none none solid none;*/
	right: -10px;
}
.resume-row-time-line .item .column-right .quot-container .quot-arrow {
	/*border-style: solid none none none;*/
	left: -10px;
}
.resume-row-time-line .item .column .quot-container .quot-block .title {
	/*display: inline-block;*/
	font-size: 16px;
	font-family: Verdana, Geneva, sans-serif;
	color: #ffffff;
}
.resume-row-time-line .item .column .quot-container .quot-block .desc {
	/*display: inline-block;*/
	margin-top: 10px;
	font-size: 13px;
	font-family: Verdana, Geneva, sans-serif;
	color: #eeeeee;
}
.resume-row-time-line .item .column .info-container {
	display: inline-block;
	position: relative;
}
.resume-row-time-line .item .column-left .info-container {
	text-align: right;
}
.resume-row-time-line .item .column-right .info-container {
	text-align: left;
	padding-top: 0px;
}
.resume-row-time-line .item .column .info-container .info-tag {
	display: block;
	font-size: 16px;
	font-family: Verdana, Geneva, sans-serif;
}
.resume-row-time-line .item .column .info-container .info-time {
	display: block;
	font-size: 13px;
	font-family: Verdana, Geneva, sans-serif;
	color: #999999;
}
.resume-row-time-line .item .column-middle .circle {
	background-color: #FFFFFC;
	margin-top: 10px;
	margin-left: -10px;
	border-radius: 50%;
	width: 20px;
	height: 20px;
	border-width: 3px;
	border-color: rgb(225,225,225);
	border-style: solid;
}

/*#resume-row-time-line-education .quot-block {
	background-color: rgb(153,204,51);
}
#resume-row-time-line-education .quot-arrow {
	border-color: rgb(153,204,51);
}*/
</style>

<div class="resume-container">
	<div class="resume-row resume-row-info">
		<div class="photo">
			<img src="/cosmo_blog/Public/img/myphoto.jpg"/>
		</div>
		<div class="info">
			<div class="item-block" style="height:50px;margin-bottom:30px;">
				<img src="/cosmo_blog/Public/img/resume_signature.png" style="height:100%;"/>
			</div>
			<div class="item-block">
			<div class="item-column">
				<div class="item-row">
					<div class="item">
						<span class="icon"><i class="fa fa-graduation-cap"></i></span><span class="desc">北京邮电大学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;通信工程专业</span>
					</div>
				</div>
				<div class="item-row">
					<div class="item">
						<span class="icon"><i class="fa fa-map-marker"></i></span><span class="desc">北京市海淀区西土城路10号</span>
					</div>
				</div>
				<div class="item-row">
					<div class="item">
						<span class="icon"><i class="fa fa-mobile"></i></span><span class="desc">+86 18610965714</span>
					</div>
				</div>
				<div class="item-row">
					<div class="item">
						<span class="icon"><i class="fa fa-envelope"></i></span><span class="desc link-in"><a href="mailto:zjzxz3006@126.com">zjzxz3006@126.com</a></span>
					</div>
				</div>
				<div class="item-row">
					<div class="item">
						<span class="icon"><i class="fa fa-qq"></i></span><span class="desc">597789699</span>
					</div>
				</div>
				<div class="item-row">
					<div class="item">
						<span class="icon"><i class="fa fa-google-plus-square"></i></span><span class="desc link-in"><a href="mailto:cosmozhang1995@gmail.com">cosmozhang1995@gmail.com</a></span>
					</div>
				</div>
			</div>
			<div class="item-column-padder"></div>
			<div class="item-column">
				<div class="item-row">
					<div class="item">
						<span class="icon"><i class="fa fa-cogs"></i></span><span class="desc">Front Ender&nbsp;&nbsp;&amp;&nbsp;&nbsp;PHPer</span>
					</div>
				</div>
				<div class="item-row">
					<div class="item">
						<span class="icon"><i class="fa fa-heart"></i></span><span class="desc">Awesome CSS&nbsp;&amp;&nbsp;Flawless RESTful&nbsp;&amp;&nbsp;Agile development</span>
					</div>
				</div>
				<div class="item-row">
					<div class="item">
						<span class="icon"><i class="fa fa-github"></i></span><span class="desc"><a target="_blank" href="https://github.com/cosmozhang1995">cosmozhang1995</a></span>
					</div>
				</div>
				<div class="item-row">
					<div class="item">
						<span class="icon"><i class="fa fa-stack-overflow"></i></span><span class="desc"><a target="_blank" href="http://stackoverflow.com/users/3429266/cosmozhang">cosmozhang</a></span>
					</div>
				</div>
				<div class="item-row">
					<div class="item">
						<span class="icon"><i class="fa fa-coffee"></i></span><span class="desc">Soccer&nbsp;&nbsp;&amp;&nbsp;&nbsp;Photograph</span>
					</div>
				</div>
				<div class="item-row">
					<div class="item" style="white-space:normal; display:block;">
						Also a developer of:&nbsp;&nbsp;<i class="fa fa-android"></i>Android&nbsp;&nbsp;<i class="fa fa-drupal"></i>Drupal&nbsp;&nbsp;<i class="fa fa-weixin"></i>Wechat Platform
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	<div id="resume-row-skills" class="resume-row resume-row-skills">
	</div>
	<div id="resume-row-time-line-container">
	<!-- <div id="resume-row-time-line-education" class="resume-row resume-row-time-line">
		<div class="time-line"><div></div></div>
		<div class="item-title">
			<div class="title">
				<span><i class="fa fa-graduation-cap"></i></span>
				<span>教育经历&nbsp;EDUCATION</span>
			</div>
		</div>
		<div class="item-content"></div>
		<div class="item-foot">
			<div class="foot">
				<span>TODAY</span>
			</div>
		</div>
	</div> -->
	</div>
</div>

<script type="text/javascript">
var mySkills = [
	{
		'name': 'js',
		'displayName': 'JavaScript',
		css: {
			'backgroundColor': '#1FFF00',
			'x': -70,
			'y': 0,
			'size': 100,
			'fontSize': 16
		}
	},
	{
		'name': 'css',
		'displayName': 'CSS',
		css: {
			'backgroundColor': '#E8B50C',
			'x': 70,
			'y': 0,
			'size': 100,
			'fontSize': 22
		}
	},
	{
		'name': 'python',
		'displayName': 'Python',
		css: {
			'backgroundColor': '#7C0CE8',
			'x': -180,
			'y': 40,
			'size': 50,
			'fontSize': 12
		}
	},
	{
		'name': 'php',
		'displayName': 'PHP',
		css: {
			'backgroundColor': '#0DC8FF',
			'x': -180,
			'y': -40,
			'size': 50,
			'fontSize': 12
		}
	},
	{
		'name': 'objc',
		'displayName': 'Obj C',
		css: {
			'backgroundColor': '#FFF602',
			'x': -250,
			'y': -80,
			'size': 50,
			'fontSize': 12
		}
	},
	{
		'name': 'cpp',
		'displayName': 'C/C++',
		css: {
			'backgroundColor': '#E8670A',
			'x': -250,
			'y': 0,
			'size': 50,
			'fontSize': 12
		}
	},
	{
		'name': 'java',
		'displayName': 'Java',
		css: {
			'backgroundColor': '#FF02FF',
			'x': -250,
			'y': 80,
			'size': 50,
			'fontSize': 12
		}
	},
	{
		'name': 'ajax',
		'displayName': 'AJAX',
		css: {
			'backgroundColor': '#0A52E8',
			'x': 0,
			'y': -80,
			'size': 80,
			'fontSize': 14
		}
	},
	{
		'name': 'jquery',
		'displayName': 'jQuery',
		css: {
			'backgroundColor': '#FF02FF',
			'x': 0,
			'y': 80,
			'size': 80,
			'fontSize': 14
		}
	},
	{
		'name': 'mysql',
		'displayName': 'MySQL',
		css: {
			'backgroundColor': '#0BFF60',
			'x': -320,
			'y': -40,
			'size': 50,
			'fontSize': 12
		}
	},
	{
		'name': 'linux',
		'displayName': 'RHEL',
		css: {
			'backgroundColor': '#E8B50C',
			'x': -320,
			'y': 40,
			'size': 50,
			'fontSize': 12
		}
	},
	{
		'name': 'thinkphp',
		'displayName': 'ThinkPHP',
		css: {
			'backgroundColor': '#0BFF60',
			// 'x': -180,
			// 'y': -120,
			'x': 320,
			'y': -40,
			'size': 50,
			'fontSize': 10
		}
	},
	{
		'name': 'ssh',
		'displayName': 'SSH',
		css: {
			'backgroundColor': '#E8B50C',
			// 'x': -180,
			// 'y': 120,
			'x': 320,
			'y': 40,
			'size': 50,
			'fontSize': 12
		}
	},
	{
		'name': 'ember',
		'displayName': 'Ember',
		css: {
			'backgroundColor': '#E8670A',
			'x': -100,
			'y': -90,
			'size': 60,
			'fontSize': 12
		}
	},
	{
		'name': 'restful',
		'displayName': 'RESTful',
		css: {
			'backgroundColor': '#E8B50C',
			'x': -100,
			'y': 90,
			'size': 60,
			'fontSize': 12
		}
	},
	{
		'name': 'bootstrap',
		'displayName': 'Bootstrap',
		css: {
			'backgroundColor': '#7C0CE8',
			'x': 100,
			'y': -90,
			'size': 60,
			'fontSize': 12
		}
	},
	{
		'name': 'nodejs',
		'displayName': 'Node.js',
		css: {
			'backgroundColor': '#0DC8FF',
			'x': 100,
			'y': 90,
			'size': 60,
			'fontSize': 12
		}
	},
	{
		'name': 'ps',
		'displayName': 'Photoshop',
		css: {
			'backgroundColor': '#0BFF60',
			'x': 180,
			'y': 40,
			'size': 50,
			'fontSize': 9
		}
	},
	{
		'name': 'ae',
		'displayName': 'AfterEffects',
		css: {
			'backgroundColor': '#E8670A',
			'x': 180,
			'y': -40,
			'size': 50,
			'fontSize': 8
		}
	},
	{
		'name': 'fl',
		'displayName': 'Flash',
		css: {
			'backgroundColor': '#0DC8FF',
			'x': 250,
			'y': -80,
			'size': 50,
			'fontSize': 12
		}
	},
	{
		'name': 'sprites',
		'displayName': 'Sprite',
		css: {
			'backgroundColor': '#FFF602',
			'x': 250,
			'y': 0,
			'size': 50,
			'fontSize': 12
		}
	},
	{
		'name': 'pr',
		'displayName': 'Premiere',
		css: {
			'backgroundColor': '#FF02FF',
			'x': 250,
			'y': 80,
			'size': 50,
			'fontSize': 12
		}
	},
	// {
	// 	'name': 'mysql',
	// 	'displayName': 'MySQL',
	// 	css: {
	// 		'backgroundColor': '#0BFF60',
	// 		'x': 320,
	// 		'y': -40,
	// 		'size': 50,
	// 		'fontSize': 12
	// 	}
	// },
	// {
	// 	'name': 'linux',
	// 	'displayName': 'RHEL',
	// 	css: {
	// 		'backgroundColor': '#E8B50C',
	// 		'x': 320,
	// 		'y': 40,
	// 		'size': 50,
	// 		'fontSize': 12
	// 	}
	// },
	// {
	// 	'name': 'fl',
	// 	'displayName': 'Flash',
	// 	css: {
	// 		'backgroundColor': '#0BFF60',
	// 		'x': 180,
	// 		'y': -120,
	// 		'size': 50,
	// 		'fontSize': 12
	// 	}
	// },
	// {
	// 	'name': 'pr',
	// 	'displayName': 'Premiere',
	// 	css: {
	// 		'backgroundColor': '#E8B50C',
	// 		'x': 180,
	// 		'y': 120,
	// 		'size': 50,
	// 		'fontSize': 10
	// 	}
	// },
]
function personalSkills (skills) {
	var skills = skills;

	function addSkill(skill) {
		var innerDiv = document.createElement('div');
		innerDiv.className = "skill-text";
		innerDiv.innerHTML = skill.displayName;
		innerDiv.style.fontSize = skill.css.fontSize + 'px';
		var div = document.createElement('div');
		div.className = "skill";
		div.style.width = skill.css.size + 'px';
		div.style.height = skill.css.size + 'px';
		div.style.lineHeight = skill.css.size + 'px';
		div.style.backgroundColor = skill.css.backgroundColor;
		var outerDiv = document.createElement('div');
		outerDiv.className = "skill-container";
		outerDiv.style.top = skill.css.y - (skill.css.size/2) + 'px';
		outerDiv.style.left = skill.css.x - (skill.css.size/2) - 10 + 'px';
		document.getElementById('resume-row-skills').appendChild(outerDiv);
		outerDiv.appendChild(div);
		div.appendChild(innerDiv);
		thediv = outerDiv;
	}
	function initialSkills() {
		document.getElementById('resume-row-skills').removeAllChildNodes();
		for (var i = 0; i < skills.length; i++) {
			addSkill(skills[i]);
		}
	}
	initialSkills();
}
$(document).ready(function() {
	personalSkills(mySkills);
});
</script>
<script type="text/javascript">
var myCourse = {
	configs: {
		'education': {
			'color': 'rgb(153,204,51)',
			'tagColor': 'rgb(255,102,102)',
			'icon': 'graduation-cap',
			'title': '教育经历&nbsp;EDUCATION',
			'foot': 'TODAY'
		},
		'career': {
			'color': 'rgb(51,102,153)',
			'tagColor': 'rgb(153,204,51)',
			'icon': 'graduation-cap',
			'title': '教育经历&nbsp;EDUCATION',
			'foot': 'TODAY'
		},
		'project': {
			'color': 'rgb(255,102,102)',
			'tagColor': 'rgb(51,102,153)',
			'icon': 'graduation-cap',
			'title': '教育经历&nbsp;EDUCATION',
			'foot': 'TODAY'
		}
	},
	education: [
		{
			'startYear': 2012,
			'startMonth': 9,
			'endYear': null,
			'endMonth': null,
			'tag': 'University',
			'title': '北京邮电大学',
			'desc': '通信工程专业试点班培养方案<br/>学生会网络部副部长'
		}
	],
	career: [
		{
			'startYear': 2012,
			'startMonth': 9,
			'endYear': null,
			'endMonth': null,
			'tag': 'University',
			'title': '北京邮电大学',
			'desc': '通信工程专业试点班培养方案<br/>学生会网络部副部长'
		}
	],
	project: [
		{
			'startYear': 2012,
			'startMonth': 9,
			'endYear': null,
			'endMonth': null,
			'tag': 'University',
			'title': '北京邮电大学',
			'desc': '通信工程专业试点班培养方案<br/>学生会网络部副部长'
		}
	]
}
function personalCourse(course) {

	function mouseOver(e) {
		if (checkHover(e,this)) {
			var theItem = $(this).parents('.item')[0];
			var theBackColor = $('body').css('background-color');
			console.log(this.style.backgroundColor);
			mythis = this;
			$(theItem).find('.column-middle .circle').css('background-color', this.style.backgroundColor);
			$(theItem).find('.column-middle .circle').css('border-color', theBackColor);
			$(this).find('.desc').show(200);
		}
	}

	function mouseOut(e) {
		if (checkHover(e,this)) {
			var theItem = $(this).parents('.item')[0];
			var theBackColor = $('body').css('background-color');
			$(theItem).find('.column-middle .circle').css('border-color', this.style.backgroundColor);
			$(theItem).find('.column-middle .circle').css('background-color', theBackColor);
			$(this).find('.desc').hide(200);
		}
	}

	function addItem(courseType, courseItem, contentInLeft) {
		var row = document.createElement('div');
		row.className = "item";
		var columnLeft = document.createElement('div');
		columnLeft.className = "column column-left";
		var columnMiddle = document.createElement('div');
		columnMiddle.className = "column column-middle";
		var columnRight = document.createElement('div');
		columnRight.className = "column column-right";
		var middleCircle = document.createElement('div');
		middleCircle.className = "circle";
		var infoBlock = document.createElement('div');
		infoBlock.className = "info-container";
		var quotBlock = document.createElement('div');
		quotBlock.className = "quot-container";
		var infoTag = document.createElement('div');
		infoTag.className = "info-tag";
		var infoTime = document.createElement('div');
		infoTime.className = "info-time";
		var quotBody = document.createElement('div');
		quotBody.className = "quot-block";
		var quotTitle = document.createElement('div');
		quotTitle.className = "title";
		var quotDesc = document.createElement('div');
		quotDesc.className = "desc";
		var quotArrow = document.createElement('div');
		quotArrow.className = "quot-arrow";

		quotTitle.innerHTML = courseItem.title;
		quotDesc.innerHTML = courseItem.desc;
		infoTag.innerHTML = courseItem.tag;
		infoTime.innerHTML = courseItem.startYear;

		quotDesc.style.display = 'none';
		quotBody.onmouseover = mouseOver;
		quotBody.onmouseout = mouseOut;

		var config = course.configs[courseType];
		infoTag.style.color = config.tagColor;
		quotBody.style.backgroundColor = config.color;
		if (contentInLeft) {
			quotArrow.style.borderColor = 'transparent transparent transparent ' + config.color;
		} else {
			quotArrow.style.borderColor = 'transparent ' + config.color + ' transparent transparent';
		}

		$('#resume-row-time-line-' + courseType + ' .item-content')[0].appendChild(row);
		row.appendChild(columnLeft);
		row.appendChild(columnMiddle);
		row.appendChild(columnRight);
		columnMiddle.appendChild(middleCircle);
		if (contentInLeft) {
			columnLeft.appendChild(quotBlock);
			columnRight.appendChild(infoBlock);
		} else {
			columnRight.appendChild(quotBlock);
			columnLeft.appendChild(infoBlock);
		}
		quotBlock.appendChild(quotArrow);
		quotBlock.appendChild(quotBody);
		quotBody.appendChild(quotTitle);
		quotBody.appendChild(quotDesc);
		infoBlock.appendChild(infoTag);
		infoBlock.appendChild(infoTime);
	}

	function addItems(courseType) {
		addFrame(courseType);
		var config = course.configs[courseType];
		$('#resume-row-time-line-' + courseType + ' .time-line').css('background-color', config.color);
		$('#resume-row-time-line-' + courseType + ' .item-content *').remove();
		var theCourseItems = course[courseType];
		var contentInLeft = Math.random() >= 0.5 ? false : true;
		for (var i = 0; i < theCourseItems.length; i++) {
			contentInLeft = !contentInLeft;
			addItem(courseType, theCourseItems[i], contentInLeft);
		}
	}

	function addFrame(courseType) {
		if (document.getElementById('resume-row-time-line-' + courseType) == undefined) {
			var config = course.configs[courseType];
			var row = document.createElement('div');
			row.className = 'resume-row resume-row-time-line';
			row.id = 'resume-row-time-line-' + courseType;
			var timeLine = document.createElement('div');
			timeLine.className = 'time-line';
			var itemTitle = document.createElement('div');
			itemTitle.className = 'item-title';
			var itemTitleTitle = document.createElement('div');
			itemTitleTitle.className = 'title';
			var itemIconSpan = document.createElement('span');
			var itemTitleSpan = document.createElement('span');
			var itemIconIcon = document.createElement('i');
			itemIconIcon.className = 'fa fa-' + config.icon;
			var itemContent = document.createElement('div');
			itemContent.className = 'item-content';
			var itemFoot = document.createElement('div');
			itemFoot.className = 'item-foot';
			var itemFootFoot = document.createElement('div');
			itemFootFoot.className = 'foot';
			var itemFootSpan = document.createElement('span');
			itemTitleSpan.innerHTML = config.title;
			itemFootSpan.innerHTML = config.foot;
			document.getElementById('resume-row-time-line-container').appendChild(row);
			row.appendChild(timeLine);
			timeLine.appendChild(document.createElement('div'));
			row.appendChild(itemTitle);
			itemTitle.appendChild(itemTitleTitle);
			itemTitleTitle.appendChild(itemIconSpan);
			itemIconSpan.appendChild(itemIconIcon);
			itemTitleTitle.appendChild(itemTitleSpan);
			row.appendChild(itemContent);
			row.appendChild(itemFoot);
			itemFoot.appendChild(itemFootFoot);
			itemFootFoot.appendChild(itemFootSpan);
		}
	}

	function addAllItems() {
		// addItems('education');
		for (var type in myCourse) {
			if (type != 'configs') {
				addItems(type);
			}
		}
	}

	addAllItems();
}
$(document).ready(function() {
	personalCourse(myCourse);
});
</script>
		</div>
	</body>
	
	<script type="text/javascript" src="/cosmo_blog/Public/js/main.js"></script>
<script type="text/javascript" src="/cosmo_blog/Public/js/libs/jquery.ba-resize.min.js"></script>
<!-- <script type="text/javascript" src="http://libs.baidu.com/lesscss/1.3.0/less.min.js"></script>
<script type="text/javascript">less.watch();</script> -->
</html>