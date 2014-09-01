{__NOLAYOUT__}
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="icon" href="__IMG_RES__/logo_32.png" type="image/x-icon"/>
<title>花栗鼠与美女猫</title>
<!-- <link rel="stylesheet" href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" /> -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="__ROOT____CSS__/mobile/index.css">
<script type="text/javascript" src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
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
  <a href="{:U('/')}" class="home-page-item" style="background:#fff; color:#000;">
    <div class="item-content">
      <div class="icon icon-logo">
        <img src="__IMG_RES__/logo_128.png">
      </div>
      <div class="text text-title">
        花栗鼠与美女猫
      </div>
      <div class="text text-subtitle">
        张家治的个人博客
      </div>
    </div>
  </a>
  <a href="{:U('/articles')}" class="home-page-item" style="background:#ffd000">
    <div class="item-content">
      <div class="icon">
        <i class="fa-fw fa fa-book"></i>
      </div>
      <div class="text">
        文章
      </div>
    </div>
  </a>
  <a href="javascript:void(0);" class="home-page-item" style="background:#e83f0c">
    <div class="item-content">
      <div class="icon">
        <i class="fa-fw fa fa-camera"></i>
      </div>
      <div class="text">
        相册
      </div>
    </div>
  </a>
  <a href="javascript:void(0);" class="home-page-item" style="background:#0c88e8">
    <div class="item-content">
      <div class="icon">
        <i class="fa-fw fa fa-paper-plane"></i>
      </div>
      <div class="text">
        玩意
      </div>
    </div>
  </a>
  <a href="javascript:void(0);" class="home-page-item" style="background:#0be529"><!-- original color: #0dff2d -->
    <div class="item-content">
      <div class="icon">
        <i class="fa-fw fa fa-user"></i>
      </div>
      <div class="text">
        简历
      </div>
    </div>
  </a>
  <a href="javascript:void(0);" class="home-page-item" style="background:#b200ff; verticle-align:middle;">
    <div class="item-content item-content-qr">
      <div class="icon icon-qr">
        <img src="__IMG_RES__/qrcode_nopadding.png">
      </div>
      <div class="text" style="margin-top:0px;">
        &nbsp;
      </div>
    </div>
  </a>
</body>
<script type="text/javascript" src="__ROOT____JS__/libs/jquery.ba-resize.min.js"></script>
<script type="text/javascript" src="__ROOT____JS__/mobile/index.js"></script>
</html>
