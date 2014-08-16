<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>相册管理 - {$gallary.title}</title>
<include file='Public/lib_req/css.php' />
<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.css" rel="stylesheet">
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<style type="text/css">
</style>
</head>

<style type="text/css">
/*
div.photo-container {
  width: 180px;
  height: auto;
  display: inline-block;
  white-space: nowrap;
}
div.photo-container div.panel-heading {
  overflow: hidden;
  text-overflow:ellipsis; 
}
div.photo-container div.panel-body {
  padding-left: 10px;
  padding-right: 10px;
}
div.photo-container div.photo {
  width: 160px;
  height: 160px;
  margin: 0 auto;
}
.photo > img {
  width: 100%;
  height: 100%;
}
*/

div.img-container {
  margin:3px;
  border:1px solid #bebebe;
  height:auto;
  width:auto;
  float:left;
  text-align:center;
}
div.img-container img {
  display:inline;
 /* margin:3px;
  border:1px solid #bebebe;*/
}
div.img-container a:hover {
  border:1px solid #333333;
}
a.img {
  display: inline-block;
  width: 150px;
  height: 150px;
  line-height: 150px;
  overflow: hidden;
  margin:3px;
  border:1px solid #bebebe;
  position: relative;
}
div.img-inner {
  display: block;
  width: 10000px;
  margin-left: -5000px;
  position: absolute;
  left: 50%;
  height: 100%;
  line-height: inherit;
  vertical-align: middle;
  text-align: center;
}
div.img-inner img {
  max-height: 100%;
  width: auto;
}
div.img-inner:before, div.img-inner:after {
  content: "";
}
div.desc {
  text-align:center;
  font-weight:normal;
  width:150px;
  font-size:12px;
  margin:10px 5px 10px 5px;
  white-space: nowrap;
  overflow: hidden;
}

/*.img-modal-container {
  width: 100%;
  max-height: 500px;
  overflow: scroll;
}
.img-modal {
  width: 100%;
  height: auto;
}*/

.img-modal-container {
  width: 100%;
  max-height: 150px;
  /*line-height: 150px;*/
  vertical-align: middle;
  text-align: center;
  white-space: nowrap;
  margin-bottom: 10px;
}
/*.img-modal-container:before, .img-modal-container:after {
  content: "";
}*/
.img-modal-span:before, .img-modal-span:after {
  content: "";
}
.img-modal {
  width: auto;
  height: auto;
  max-height: 100%;
  max-width: 100%;
  border:1px solid #bebebe;
}
</style>

<body>
<div class="container" style="">
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
  <h1>相册 - {$gallary.title}&nbsp;<small>记录点滴生活</small></h1>
</div>
</div>
<div class="row">
  <div class="col-12" style="margin-bottom: 10px;">
    <a type="button" class="btn btn-lg btn-success" href={:U('Gallary/uploadPhotos', 'id='.$gallary['id'])}>上传照片</a>
  </div>
</div>

<div class="row">
  <script type="text/javascript">photoList = [];</script>
  <volist name="photos" id="photo">
    <script type="text/javascript">photoList.push(<?php echo json_encode($photo); ?>);</script>
    <div id="photo-item{$photo.id}" class="img-container">
      <a class="img" href="javascript:void(0);" onclick="showPhotoInModal({$photo.id});">
        <div class="img-inner" >
          <img src="{$photo.url}" alt="{$photo.title}" />
        </div>
      </a>
      <div class="desc">{$photo.title}</div>
    </div>
  </volist>
</div>

</div>




<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 id="img-modal-title" class="modal-title">照片</h4>
      </div>
      <div class="modal-body">
        <div class="img-modal-container">
          <span class="img-modal-span"><img class="img-modal" id="img-modal" src="{$photo.url}" /></span>
        </div>
        <div>
          <form id="edit-form" class="form-horizontal" role="form">
            <input id="inputId" type="hidden" name="id" /> 
            <div class="form-group">
              <label for="inputTitle" class="col-sm-2 control-label">标题</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputTitle" placeholder="标题" />
              </div>
            </div>
            <div class="form-group">
              <label for="inputTitle" class="col-sm-2 control-label">描述</label>
              <div class="col-sm-10">
                <textarea type="text" class="form-control" id="inputDescription" placeholder="描述" rows=3 ></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button id="cancelBtn" type="button" class="form-btn btn btn-default" onclick="cancelModal();">取消</button>
                <button id="updateBtn" type="button" class="form-btn btn btn-primary" onclick="updatePhoto();">确定</button>
                <button id="deleteBtn" type="button" class="form-btn btn btn-success" onclick="setCover();">设为封面</button>
                <button id="deleteBtn" type="button" class="form-btn btn btn-danger" onclick="deletePhoto();">删除</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




</body>
<script type="text/javascript">
function findPhoto(id) {
  for (var i = 0; i < photoList.length; i++) {
    if (photoList[i].id == id) {
      return photoList[i];
    }
  }
}
function updateViewValues(id) {
  if (id === undefined) {
    for (var i = 0; i < photoList.length; i++) {
      var photoObj = photoList[i];
      $('#photo-item'+photoObj.id+' .desc').html(photoObj.title);
      $('#photo-item'+photoObj.id+' img').attr('alt', photoObj.title);
      $('#photo-item'+photoObj.id+' img').attr('src', photoObj.url);
    }
  } else {
    var photoObj = findPhoto(id);
    $('#photo-item'+photoObj.id+' .desc').html(photoObj.title);
    $('#photo-item'+photoObj.id+' img').attr('alt', photoObj.title);
    $('#photo-item'+photoObj.id+' img').attr('src', photoObj.url);
  }
}
function showPhotoInModal(id) {
  var photoObj = findPhoto(id);
  $('#img-modal').attr('src', photoObj.url);
  $('#img-modal-title').html(photoObj.title);
  // $('#inputId').attr('value', photoObj.id);
  document.getElementById('inputId').value = photoObj.id;
  // $('#inputTitle').attr('value', photoObj.title);
  document.getElementById('inputTitle').value = photoObj.title;
  // $('#inputDescription').attr('value', photoObj.description);
  document.getElementById('inputDescription').value = photoObj.description;
  $('#inputDescription').html(photoObj.description);
  $('#myModal').modal({});
}
function cancelModal() {
  $('#myModal').modal('hide');
}
function updatePhoto() {
  var photoId = document.getElementById('inputId').value;
  var formData = new FormData();
  formData.append('id', photoId);
  formData.append('title', document.getElementById('inputTitle').value);
  formData.append('description', document.getElementById('inputDescription').value);
  var xhr = new XMLHttpRequest();
  xhr.open('post', "{:U('updatePhotoHandler')}");
  $('.form-btn').attr('disabled','disabled');
  xhr.onload = function() {
    $('.form-btn').removeAttr('disabled');
    if (xhr.readyState==4 && xhr.status==200) {
      var resp = JSON.parse(xhr.responseText);
      if (resp.status == 0) {
        findPhoto(photoId).title = document.getElementById('inputTitle').value;
        findPhoto(photoId).description = document.getElementById('inputDescription').value;
        updateViewValues(photoId);
        cancelModal();
      } else {
        alert('更新失败：' + resp.msg);
      }
    } else {
      alert('更新失败：HTTP错误' + xhr.status);
    }
  }
  xhr.send(formData);
}
function setCover() {
  var gallaryId = {$gallary.id};
  var photoId = document.getElementById('inputId').value;
  var formData = new FormData();
  formData.append('cover_photo_id', photoId);
  formData.append('id', gallaryId);
  var xhr = new XMLHttpRequest();
  xhr.open('post', "{:U('updateHandler')}");
  $('.form-btn').attr('disabled','disabled');
  xhr.onload = function() {
    $('.form-btn').removeAttr('disabled');
    if (xhr.readyState==4 && xhr.status==200) {
      var resp = JSON.parse(xhr.responseText);
      if (resp.status == 0) {
        alert('设置成功');
        cancelModal();
      } else {
        alert('设置失败：' + resp.msg);
      }
    } else {
      alert('设置失败：HTTP错误' + xhr.status);
    }
  }
  xhr.send(formData);
}
function deletePhoto() {
  var photoId = document.getElementById('inputId').value;
  var formData = new FormData();
  formData.append('id', photoId);
  var xhr = new XMLHttpRequest();
  xhr.open('post', "{:U('deletePhotoHandler')}");
  $('.form-btn').attr('disabled','disabled');
  xhr.onload = function() {
    $('.form-btn').removeAttr('disabled');
    if (xhr.readyState==4 && xhr.status==200) {
      var resp = JSON.parse(xhr.responseText);
      if (resp.status == 0) {
        $('#photo-item'+photoId).remove();
        cancelModal();
      } else {
        alert('删除失败：' + resp.msg);
      }
    } else {
      alert('删除失败：HTTP错误' + xhr.status);
    }
  }
  xhr.send(formData);
}
</script>
</html>