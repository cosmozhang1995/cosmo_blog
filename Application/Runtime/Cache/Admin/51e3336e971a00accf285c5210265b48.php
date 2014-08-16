<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>上传照片 - <?php echo ($gallary["title"]); ?></title>
<link rel="stylesheet" href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" />
<link href="http://libs.baidu.com/fontawesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.css" rel="stylesheet">
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<style type="text/css">
</style>
</head>

<style type="text/css">
.photo-item {
  min-height: 180px;
}
.preview-container {
  width: 160px;
  height: 160px;
  float: left;
  position: relative;
  overflow: hidden;
  border: 1px #CCC solid;
}
.info-container {
  margin-left: 160px;
  padding-left: 10px;
  padding-right: 10px;
}
/*.preview-container img {
  width: 100%;
  height: 100%;
  border: 1px #CCC solid;
}*/
.preview-div {
  width: 10000px;
  height: 160px;
  vertical-align: middle;
  text-align: center;
  position: absolute;
  left: 50%;
  margin-left: -5000px;
}
.preview-img {
  width: auto;
  height: 100%;
  display: inline-block;
}
.remove-button {
  display: inline-block;
  font-size: 20px;
  position: absolute;
  right: 0px;
  top: 0px;
}
.preview-modal-container {
  width: 100%;
  max-height: 500px;
  overflow: scroll;
}
.preview-modal {
  width: 100%;
  height: auto;
}
</style>

<body>
<div class="container" style="">
<?php if(isset($message)): ?><div class="row">
  <p>
    <div class="alert alert-dismissible <?php echo (translatestatus2alert($message["status"])); ?>" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <?php echo ($message["msg"]); ?>
    </div>
  </p>
</div><?php endif; ?>
<div class="row">
<div class="page-header">
  <h1>上传照片 - <?php echo ($gallary["title"]); ?>&nbsp;<small>记录点滴生活</small></h1>
</div>
</div>
<div class="row">
  <div class="col-12" style="margin-bottom: 10px;">
    <a type="button" class="btn btn-lg btn-success" href="javascript:void(0);" onclick="selectFiles();">添加</a>
    <a type="button" class="btn btn-lg btn-primary" href="javascript:void(0);" onclick="uploadFiles();">上传</a>
  </div>
</div>

<div class="row">
  <div id="main-progress-container" class="progress-container" style="display:none;" >
    <div class="progress">
      <div id="main-progress" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%; min-width: 20px;">
        <span class="sr-only">60%</span>
      </div>
    </div>
  </div>
  <script type="text/javascript"></script>
</div>

<form>
<input id="file-selector" type="file" multiple onchange="updateFiles();" style="display:none;" />
<div class="row">
  <div id="list-group-example" class="list-group" style="display:none;">
    <div id="photo-item{id}" href="javascript:void(0);" class="list-group-item photo-item">
      <a class="remove-button" href="javascript:void(0);" onclick="removePhoto({id});" ><i class="fa fa-times"></i></a>
      <div class="preview-container">
        <!-- <img id="preview-image{id}" class="preview-img" /> -->
        <a href="javascript:void(0);" onclick="showModal({id});" >
          <div class="preview-div">
            <img id="preview-image{id}" class="preview-img" />
          </div>
        </a>
      </div>
      <div class="info-container">
        <div>
          <div class="form-group">
            <label for="title">标题</label>
            <input id="title{id}" type="text" class="form-control" name="title" placeholder="标题" onchange="updateValues({id});" />
          </div>
          <div class="form-group">
            <label for="description">描述</label>
            <textarea id="description{id}" type="text" class="form-control" name="description" placeholder="描述" rows=3 onchange="updateValues({id});"></textarea>
          </div>
        </div>
      </div>
      <div class="progress-container" style="display:none;">
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
            <span class="sr-only">60% Complete</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="list-group" class="list-group">
  </div>
</div>
</form>

</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">照片</h4>
      </div>
      <div class="modal-body">
        <div class="preview-modal-container">
          <img class="preview-modal" id="preview-modal" />
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



</body>
<script type="text/javascript">
 photos = [];
var itemHtml = document.getElementById('list-group-example').innerHTML;
var listGroup = document.getElementById('list-group');
var fileSelector = document.getElementById('file-selector');
var allowedFileTypes = ['jpg', 'png', 'ico', 'bmp'];
Array.prototype.contains = function(ele) {
  for (var i = 0; i < this.length; i++) {
    if (this[i] == ele) return true;
  }
  return false;
}

function selectFiles() {
  fileSelector.click();
}

function updateFiles() {
  for (var i = 0; i < fileSelector.files.length; i++) {
    var photoObj = {
      'title': fileSelector.files[i].name,
      'description': "",
      'file': fileSelector.files[i],
      'fileUrl': false
    }
    photos.push(photoObj);
  }

  updateListView();
}

function updateValues(id) {
  photos[id].title = document.getElementById('title'+id).value;
  photos[id].description = document.getElementById('description'+id).value;
}

function updateListView() {
  listGroup.innerHTML = "";
  for (var i = 0; i < photos.length; i++) {
    var htmltoadd = itemHtml.replace(/\{id}/g, i);
    listGroup.innerHTML += htmltoadd;
  }
  for (var i = 0; i < photos.length; i++) {
    var photoObj = photos[i];
    document.getElementById('title'+i).value = photoObj.title;
    document.getElementById('description'+i).value = photoObj.description;
    if (photoObj.fileUrl) {
      document.getElementById('preview-image'+i).src = photoObj.fileUrl;
    } else if (photoObj.file.type.match(/image\/[a-zA-Z0-9]+/)) {
      var defaultImageReader = new FileReader();
      defaultImageReader.onload = function (e) {
        var imgData = e.target.result;
        this.photoObj.fileUrl = imgData;
        document.getElementById('preview-image'+this.id).src = this.photoObj.fileUrl;
      }
      defaultImageReader.id = i;
      defaultImageReader.photoObj = photoObj;
      defaultImageReader.readAsDataURL(photoObj.file);
    }
  }
  
}

function removePhoto(id) {
  photos.splice(id, 1);
  updateListView();
}

function showModal(id) {
  var photoObj = photos[id];
  $('#myModal .modal-title').html("照片："+photoObj.title);
  $('#myModal .preview-modal').attr("src", photoObj.fileUrl);
  $('#myModal').modal();
}

function uploadFiles() {
  var form = new FormData();
  for (var i = 0; i < photos.length; i++) {
    var photoObj = photos[i];
    form.append("title[]", photoObj.title);
    form.append("description[]", photoObj.description);
    form.append("file[]", photoObj.file);
  }
  var xhr = new XMLHttpRequest();
  xhr.open('post', "<?php echo U('uploadPhotosHandler', 'id='.$gallary['id']);?>", true);
  xhr.onload = function() {
    if (xhr.readyState==4 && xhr.status==200) {
      var responseObj = JSON.parse(xhr.responseText);
      console.log(responseObj);
      if (responseObj.status == 0) {
        alert('上传成功！');
        $('#main-progress-container').hide();
        $('#main-progress').attr('aria-valuenow', 0);
        $('#main-progress').css('width', '0%');
        $('#main-progress').html('0%');
        photos = [];
        updateListView();
        window.location = "<?php echo U('adminPhotos', 'id='.$gallary['id']);?>";
      } else {
        alert('上传失败：'+responseObj.msg);
        $('#main-progress-container').hide();
        $('#main-progress').attr('aria-valuenow', 0);
        $('#main-progress').css('width', '0%');
        $('#main-progress').html('0%');
      }
    } else {
      alert('上传失败：HTTP错误'+xhr.status);
      $('#main-progress-container').hide();
      $('#main-progress').attr('aria-valuenow', 0);
      $('#main-progress').css('width', '0%');
      $('#main-progress').html('0%');
    }
    
  }
  xhr.upload.addEventListener("progress", progressFunction, false)
  xhr.send(form);
  $('#main-progress-container').show();
}

function progressFunction(e) {
  var prog = parseInt(parseFloat(e.loaded)/parseFloat(e.total)*100);
  $('#main-progress').attr('aria-valuenow', prog);
  $('#main-progress').css('width', prog+'%');
  $('#main-progress').html(prog+'%');
}

</script>
</html>