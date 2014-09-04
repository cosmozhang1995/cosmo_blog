<style type="text/css">
.main-container {
	margin-left: 5px;
	margin-right: 5px;
}
.photo-list-container {
	margin-top: -2px;
	display: block;
	text-align: center;
	overflow: hidden;
}
.photo-list {
	text-align: left;
	display: inline-block;
	width: auto;
	/*max-width: 100%;*/
	text-align: center;
}
.photo-item {
	width: 80px;
	height: 80px;
	display: inline-block;
	margin: 2px;
}
.photo-item img {
	width: 100%;
	height: 100%;
}
.loading-indicator-row {
	height: 50px;
	display: block;
	text-align: center;
	position: absolute;
	display: block;
	/*width: 100%;*/
	top: 50%;
	left: 50%;
	margin-top: -25px;
	margin-left: -25px;
}
.loading-indicator-container {
	display: inline-block;
	width: 50px;
	height: 50px;
}
</style>
<link rel="stylesheet" type="text/css" href="__ROOT__/Public/libs/trible-pager/css/trible-pager.css" />
<div id="photo-list-container" class="photo-list-container">
	<div id="photo-list" class="photo-list">
	</div>
</div>
<div class="loading-indicator-row">
	<div class="loading-indicator-container">
		<div class="loading-indicator loading-indicator-1"></div>
		<div class="loading-indicator loading-indicator-2"></div>
	</div>
</div>
<script type="text/javascript">
// $('.photo-item').resize(function() {
// 	var w = $(this).width();
// 	var h = $(this).height();
// 	var id = parseInt(this.dataset.id);
// 	console.log(w,h,id);
// 	if (w > 0 && h > 0) {
// 		var url = thumbnailUrl.replace('width', w).replace('height', h).replace('id', id);
// 		var img = $(this).find('img')[0];
// 		var formerUrl = img.src;
// 		if (!(formerUrl === url)) {
// 			img.src = url;
// 			$('#photo-list-container').css('height', '0px');
// 			$('.loading-indicator-row').show();
// 		}
// 	}
// });
var thumbnailUrl = "{:U('/api/photo/thumbnailwidthxheight/id')}";
var photos = [];
var pagerView = null;
function findPhotoById(id) {
	for (var i = 0; i < photos.length; i++) {
		if (photos[i].id == id) return photos[i];
	}
	return null;
}
function isImgLoad(img) {
	if ( !! window.ActiveXObject) {
		// IE
		if (img.readyState == 'complete') {
			return true;
		} else {
			return false;
		}
	} else {
		// 非IE
		if (img.complete == true) {
			return true;
		} else {
			return false;
		}
	}
}
function checkImgLoad() {
	var imgList = $('.photo-item img');
	for (var i = 0; i < imgList.length; i++) {
		if (isImgLoad(imgList[i])) return true;
	}
	return false;
}	
var initPhotoList = function(photos) {
	function addItem(photo) {
		var itemDiv = document.createElement('div');
		var itemThumbnail = document.createElement('img');
		itemDiv.dataset.id = photo.id;
		itemDiv.className = 'photo-item';
		itemThumbnail.onload = function() {
			if (checkImgLoad()) {
				$('.loading-indicator-row').hide();
				$('#photo-list-container').css('height', 'auto');
			}
		};
		itemThumbnail.onerror = function() {
			this.src = "__IMG_RES__/default_150_150.png";
		};
		itemThumbnail.onclick = function() {
			if (pagerView && pagerView.destroy) pagerView.destroy();
			var photoId = parseInt(itemDiv.dataset.id);
			var photoIndex = null;
			for (var i = 0; i < photos.length; i++) {
				if (photos[i].id === photoId) {
					photoIndex = i;
					break;
				}
			}
			pagerView = new TriblePager(photos, photoIndex, {
				closeButton:"<i class=\"fa fa-fw fa-close\"></i>",
				loadingIndicator: "<span style=\"margin-top:50%; display:inline-block;\"><i class=\"fa fa-circle-o-notch fa-spin\" style=\"font-size:40px; margin-top:20px;\"></i></span>",
				defaultImgSrc: "__IMG_RES__/default_150_150.png"
			});
		};
		itemDiv.appendChild(itemThumbnail);
		document.getElementById('photo-list').appendChild(itemDiv);
	}
	function initList() {
		document.getElementById('photo-list').removeAllChildNodes();
		$('#photo-list-container').css('height', '0px');
		$('.loading-indicator-row').show();
		for (var i = 0; i < photos.length; i++) {
			addItem(photos[i]);
		}
		$('.photo-item').resize(function() {
			var w = $(this).width();
			var h = $(this).height();
			var id = parseInt(this.dataset.id);
			if (w > 0 && h > 0) {
				var url = thumbnailUrl.replace('width', w).replace('height', h).replace('id', id);
				var img = $(this).find('img')[0];
				var formerUrl = img.src;
				if (!(formerUrl === url)) {
					img.src = url;
					$('#photo-list-container').css('height', '0px');
					$('.loading-indicator-row').show();
				}
			}
		});
	}
	initList();
};
$(document).ready(function() {
	
	$.get("<?php echo U('/api/gallery/'.$gallary['id'].'/photos') ?>", function(data, status) {
		if (status=='success') {
			photos = JSON.parse(data);
			initPhotoList(photos);
			$('.photo-item').resize();
		} else {
			console.warn('Error when fetching photos: HTTP Error '+status);
		}
	});
});
</script>
<script type="text/javascript" src="__ROOT__/Public/libs/trible-pager/js/trible-pager.min.js"></script>