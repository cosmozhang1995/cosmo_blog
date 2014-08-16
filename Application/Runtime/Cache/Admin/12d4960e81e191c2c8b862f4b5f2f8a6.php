<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>编辑相册</title>
<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.css" rel="stylesheet">
<style type="text/css">
#content-editor {
	overflow:scroll; 
	height:150px;
	max-height:150px;
}
</style>
</head>

<body>
<div class="container" style="">
<?php if (false): ?>
<div class="alert alert-danger" role="alert">...</div>
<?php endif; ?>
<form role="form" method="post" action="<?php echo ($isnew?U('Gallary/create'):U('Gallary/update')); ?>">
  <input type="hidden" id="id" name="id" value="<?php echo ($gallary["id"]); ?>" />
  <div class="form-group">
    <label for="title">标题</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="标题" value="<?php echo ($gallary["title"]); ?>" />
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">标签</label>
    <select id="tag" name="tag" value="<?php echo ($gallary["tag"]); ?>">
    	<?php if(is_array($tags)): $i = 0; $__LIST__ = $tags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i; if($item['name'] == $gallary['tag']): ?><option value="<?php echo ($item["name"]); ?>" selected="selected"><?php echo ($item["tag"]); ?></option>
        <?php else: ?>
          <option value="<?php echo ($item["name"]); ?>"><?php echo ($item["tag"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
    </select>
  </div>
  
  <label for="description">描述</label>
  <textarea id="content-editor" name="description" class="form-control"><?php echo ($gallary["description"]); ?></textarea>
  <button type="submit" class="btn btn-default" style="margin-top: 10px;">Submit</button>
</form>
</div>
</body>
<script type="text/javascript">
</script>
</html>