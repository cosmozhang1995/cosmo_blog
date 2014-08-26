<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="baidu-site-verification" content="ZktHpo90lB" />
	<title>{$page_info['title']|default=首页} - 花栗鼠与美女猫</title>
	<include file='Public/lib_req/css.php' />
	<link rel="stylesheet/less" type="text/css" href="__ROOT____CSS__/style.css">
	<include file='Public/lib_req/js.php' />
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