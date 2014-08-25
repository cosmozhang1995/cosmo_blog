<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>相册列表</title>
<include file='Public/lib_req/css.php' />
<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.css" rel="stylesheet">
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<style type="text/css">
</style>
</head>

<body>
<div class="container" style="">
  <div class="row">
    <div class="col-md-2">
      <include file="Public:common_nav"/>
    </div>
    <div class="col-md-10">
      <present name="message">
      <div class="row">
        <p>
          <div class="alert alert-dismissible {$message.status|translateStatus2Alert}" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            {$message.msg}
          </div>
        </p>
      </div>
      </present>
      <div class="row">
      <div class="page-header">
        <h1>相册列表&nbsp;<small>记录点滴生活</small></h1>
      </div>
      </div>
      <div class="row">
        <div class="col-12" style="margin-bottom: 10px;">
          <a type="button" class="btn btn-lg btn-success" href={:U('Gallary/edit')}>添加</a>
        </div>
      </div>
      
      <div class="row">
      <div class="list-group">
        <volist name="list" id="item">
          <a href="javascript:void(0);" onclick="adminPhotos({$item.id});return false;" class="list-group-item">
            <h4 class="list-group-item-heading">{$item.title}</h4>
            <p class="list-group-item-text">
              <span class="label label-info">{$item.tag|translateTag="Gallary",###}</span> - 
              {$item.create_time|translateDate}
            </p>
            <p>
              <div class="btn-group btn-group-justified" style>
                <div class="btn-group">
                  <button class="btn btn-info" onclick="editGallary({$item.id});return false;" href="">编辑</button>
                </div>
                <div class="btn-group">
                  <button class="btn btn-danger" onclick="deleteGallary({$item.id});return false;" href="">删除</button>
                </div>
              </div>
            </p>
          </a>
        </volist>
      </div>
      </div>
      
      <div class="row">
      <ul class="pager">
        <li class="previous"><a href="{:U('list', 'page='.($page-1).'&pn='.$pn)}">&larr; Previous</a></li>
        <li class=""><a href="javascript:void(0);">第{$page}页</a></li>
        <li class="next"><a href="{:U('list', 'page='.($page+1).'&pn='.$pn)}">Next &rarr;</a></li>
      </ul>
      </div>
    </div>
  </div>
</div>
</body>
<script type="text/javascript">
function deleteGallary(id) {
  var form = document.createElement('form');
  var input = document.createElement('input');
  form.appendChild(input);
  form.action = "{:U('delete')}";
  form.method = 'get';
  input.name = "id";
  input.value = id;
  form.submit();
  return true;
}
function adminPhotos(gallary_id) {
  var form = document.createElement('form');
  var input = document.createElement('input');
  form.appendChild(input);
  form.action = "{:U('adminPhotos')}";
  form.method = 'get';
  input.name = "id";
  input.value = gallary_id;
  form.submit();
  return true;
}
function editGallary(id) {
  var form = document.createElement('form');
  var input = document.createElement('input');
  form.appendChild(input);
  form.action = "{:U('edit')}";
  form.method = 'get';
  input.name = "id";
  input.value = id;
  form.submit();
  return true;
}
</script>
</html>