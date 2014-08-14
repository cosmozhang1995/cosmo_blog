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
	height: 400px;
	position: relative;
	width: 50%;
	left: 50%;
	top: 200px;
}
.resume-row-skills .skill-container {
	display: inline-block;
	padding: 10px;
	border-radius: 50%;
	position: absolute;
}
.resume-row-skills .skill-container:hover {
	background-color: rgba(200,200,200,0.5);
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
	<div id="" class="resume-row" style="height:200px;">
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
			'backgroundColor': '#0BFF60',
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
			'backgroundColor': '#0DC8FF',
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
		'name': 'sprites',
		'displayName': 'Sprite',
		css: {
			'backgroundColor': '#FFF602',
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
			'backgroundColor': '#FFF602',
			'x': 250,
			'y': -80,
			'size': 50,
			'fontSize': 12
		}
	},
	{
		'name': 'mvc',
		'displayName': 'MVC',
		css: {
			'backgroundColor': '#0DC8FF',
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
		console.log(div.style);
		var outerDiv = document.createElement('div');
		outerDiv.className = "skill-container";
		outerDiv.style.top = skill.css.y - (skill.css.size/2) + 'px';
		outerDiv.style.left = skill.css.x - (skill.css.size/2) + 'px';
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
		</div>
	</body>
	
	<script type="text/javascript" src="/cosmo_blog/Public/js/main.js"></script>
<script type="text/javascript" src="/cosmo_blog/Public/js/libs/jquery.ba-resize.min.js"></script>
<!-- <script type="text/javascript" src="http://libs.baidu.com/lesscss/1.3.0/less.min.js"></script>
<script type="text/javascript">less.watch();</script> -->
</html>