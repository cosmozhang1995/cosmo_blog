<link rel="stylesheet" type="text/css" href="__ROOT____CSS__/page-flag.css">
<style type="text/css">

.page-flag-container {
	left: 100px;
}
.page-flag {
	border-color: transparent #0080ff;
}
.page-flag-text > p {
	text-shadow: 1px 1px 2px #0080ff, 0 0 0 #000;
}

.newbies-list {
	padding: 10px 30px;
	margin-top: 40px;
	text-align: center;
	white-space: normal;
}
.newbies-item {
	display: inline-block;
	width: 320px;
	height: 140px;
	margin: 10px 25px;
	box-shadow: 0px 1px 7px -2px #000;
	background-color: #fff;
}
@media screen and (max-width: 800px) {
	.newbies-item {
		width: 180px;
		height: 90px;
	}
}
@media screen and (min-width: 801px) and (max-width: 1024px) {
	.newbies-item {
		width: 240px;
		height: 120px;
	}
}
@media screen and (min-width: 1025px) and (max-width: 1440px) {
	.newbies-item {
		width: 320px;
		height: 160px;
	}
}
@media screen and (min-width: 1441px){
	.newbies-item {
		width: 400px;
		height: 200px;
	}
}
.newbies-item img {
	width: 100%;
	height: 100%;
}
</style>
<include file="Public:common_page_flag" />
<div id="newbies-list" class="newbies-list">
	<!-- <a href="#">
		<div class="newbies-item">
			<img src="">
		</div>
	</a> -->
</div>
<script type="text/javascript">
function newbiesList(list) {
	function addNewbiesItem(item) {
		var anchor = document.createElement('a');
		var itemDiv = document.createElement('div');
		var img = document.createElement('img');

		img.onerror = function() {
			this.src = "__IMG_RES__/default_400_200.png";
		}

		anchor.href = item.url;
		anchor.target = '_blank';
		itemDiv.className = "newbies-item";
		img.src = item.img;

		document.getElementById('newbies-list').appendChild(anchor);
		anchor.appendChild(itemDiv);
		itemDiv.appendChild(img);
	}

	function initNewbiesList(itemList) {
		document.getElementById('newbies-list').removeAllChildNodes();
		for (var i = 0; i < itemList.length; i++) {
			addNewbiesItem(itemList[i]);
		}
	}

	initNewbiesList(list);
}
$(document).ready(function() {
	$.getJSON("{:U('/api/newbies/newbies')}", function(data) {
		newbiesList(data);
	});
})
</script>