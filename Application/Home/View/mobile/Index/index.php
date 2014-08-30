{__NOLAYOUT__}
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<include file="Public:common_api_meta" />
<link rel="icon" href="__IMG_RES__/logo_32.png" type="image/x-icon"/>
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
</body>
</html>
