{__NOLAYOUT__}
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>花栗鼠与美女猫</title>
<include file='Public/lib_req/css.php' />
<link rel="stylesheet/less" type="text/css" href="__ROOT____CSS__/style.css">
<link rel="stylesheet/less" type="text/css" href="__ROOT____CSS__/index.css">
<if condition="$inframe eq true">
<link rel="stylesheet/less" type="text/css" href="__ROOT____CSS__/index-inframe.css">
</if>
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
<div class="fan-container-container">
	<div class="fan-container" id="fan-main-container">
		<div id="fanleaves-container" class="fanleaves-container">
    		<div class="fanleaf-container fanleaf-container0">
				<a href="{:U('/articles/')}" target="_top" class="fanleaf" id="fanleaf-article">
    		    	<span class="fa fa-book"></span>
				</a>
			</div>
    		<div class="fanleaf-container fanleaf-container1">
				<a href="{:U('/gallary/')}" target="_top" class="fanleaf" id="fanleaf-pic">
    		    	<span class="fa fa-picture-o"></span>
				</a>
			</div>
		    <div class="fanleaf-container fanleaf-container4">
				<a href="javascript:void(0);" target="_top" class="fanleaf" id="fanleaf-game">
    		    	<span class="fa fa-paper-plane"></span>
				</a>
			</div>
    		<div class="fanleaf-container fanleaf-container3">
				<a href="{:U('/resume/')}" target="_top" class="fanleaf" id="fanleaf-resume">
    		    	<span class="fa fa-user"></span>
				</a>
			</div>
		    <div class="fanleaf-container fanleaf-container2">
				<a href="javascript:void(0);"  class="fanleaf" id="fanleaf-qrcode">
    	    		<span class="fa fa-qrcode"></span>
				</a>
			</div>
   		</div>
    	<div class="center-circle-container">
    		<div class="center-circle" id="center-circle">
    	    	<div class="center-circle-content-fill">
    	        	<img src="__IMG_RES__/portrait.jpg" id="center-circle-content-portrait" class="center-circle-content" style="width:100%; height:100%;"/>
    	            <img src="__IMG_RES__/qrcode.png" id="center-circle-content-qrcode" class="center-circle-content" style="width:100%; height:100%;"/>
    	            <div id="center-circle-content-resume" class="center-circle-content center-circle-content-text">
    	            	<div class="center-circle-content-text-chinese">我</div>
    	                <div class="center-circle-content-text-english">Resume</div>
    	            </div>
    	            <div id="center-circle-content-article" class="center-circle-content center-circle-content-text">
    	            	<div class="center-circle-content-text-chinese">文</div>
    	                <div class="center-circle-content-text-english">Articles</div>
    	            </div>
    	            <div id="center-circle-content-pic" class="center-circle-content center-circle-content-text">
    	            	<div class="center-circle-content-text-chinese">图</div>
    	                <div class="center-circle-content-text-english">Galary</div>
    	            </div>
    	            <div id="center-circle-content-game" class="center-circle-content center-circle-content-text">
    	            	<div class="center-circle-content-text-chinese">玩</div>
    	                <div class="center-circle-content-text-english">Games</div>
    	            </div>
    	        </div>
    	        <div class="center-circle-content-fit">
    	        </div>
    	        <a class="center-circle-cover" href="{:U('/')}" target="_top"></a>
    	    </div>
    	</div>
	</div>
</div>
<include file='Public/lib_req/js.php' />
<if condition="$inframe eq true">
<else/>
<script type="text/javascript" src="__ROOT____JS__/main.js"></script>
</if>
<script type="text/javascript" src="__ROOT____JS__/index.js"></script>
<if condition="$inframe eq true">
<script type="text/javascript" src="__ROOT____JS__/index-inframe.js"></script>
</if>
</body>
</html>
