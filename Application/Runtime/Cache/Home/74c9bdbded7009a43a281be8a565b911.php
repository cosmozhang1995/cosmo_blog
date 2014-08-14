<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>花栗鼠与美女猫</title>
<link rel="stylesheet" href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" />
<!-- <link href="http://libs.baidu.com/fontawesome/4.0.3/css/font-awesome.min.css" rel="stylesheet"> -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet/less" type="text/css" href="/cosmo_blog/Public/css/style.css">
<link rel="stylesheet/less" type="text/css" href="/cosmo_blog/Public/css/index.css">
<?php if($inframe == true): ?><link rel="stylesheet/less" type="text/css" href="/cosmo_blog/Public/css/index-inframe.css"><?php endif; ?>
</head>

<body>
<div class="fan-container-container">
	<div class="fan-container" id="fan-main-container">
		<div id="fanleaves-container" class="fanleaves-container">
    		<div class="fanleaf-container fanleaf-container0">
				<a href="<?php echo U('/articles/');?>" target="_top" class="fanleaf" id="fanleaf-article">
    		    	<span class="fa fa-book"></span>
				</a>
			</div>
    		<div class="fanleaf-container fanleaf-container1">
				<a href="<?php echo U('/articles/');?>" target="_top" class="fanleaf" id="fanleaf-pic">
    		    	<span class="fa fa-picture-o"></span>
				</a>
			</div>
		    <div class="fanleaf-container fanleaf-container4">
				<a href="games/" target="_top" class="fanleaf" id="fanleaf-game">
    		    	<span class="fa fa-paper-plane"></span>
				</a>
			</div>
    		<div class="fanleaf-container fanleaf-container3">
				<a href="resume/" target="_top" class="fanleaf" id="fanleaf-resume">
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
    	        	<img src="/cosmo_blog/Public/img/portrait.jpg" id="center-circle-content-portrait" class="center-circle-content" style="width:100%; height:100%;"/>
    	            <img src="/cosmo_blog/Public/img/qrcode.png" id="center-circle-content-qrcode" class="center-circle-content" style="width:100%; height:100%;"/>
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
    	        <a class="center-circle-cover" href="<?php echo U('/');?>" target="_top"></a>
    	    </div>
    	</div>
	</div>
</div>
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
<?php if($inframe == true): else: ?>
<script type="text/javascript" src="/cosmo_blog/Public/js/main.js"></script><?php endif; ?>
<script type="text/javascript" src="/cosmo_blog/Public/js/index.js"></script>
<?php if($inframe == true): ?><script type="text/javascript" src="/cosmo_blog/Public/js/index-inframe.js"></script><?php endif; ?>
</body>
</html>