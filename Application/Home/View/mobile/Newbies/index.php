<style type="text/css">
.newbies-list {
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

	tap-highlight-color: rgba(255,255,255,1);
	-moz-tap-highlight-color: rgba(255,255,255,1);
	-o-tap-highlight-color: rgba(255,255,255,1);
	-ms-tap-highlight-color: rgba(255,255,255,1);
	-webkit-tap-highlight-color: rgba(255,255,255,1);
}
@media screen and (max-width: 200px) {
	.newbies-item {
		width: 90%;
		height: auto;
	}
}
@media screen and (min-width: 201px) and (max-width: 300px) {
	.newbies-item {
		width: 180px;
		height: 90px;
	}
}
@media screen and (min-width: 301px) and (max-width: 400px) {
	.newbies-item {
		width: 280px;
		height: 140px;
	}
}
@media screen and (min-width: 401px) and (max-width: 800px) {
	.newbies-item {
		width: 380px;
		height: 190px;
	}
}
@media screen and (min-width: 801px) and (max-width: 1024px) {
	.newbies-item {
		width: 440px;
		height: 220px;
	}
}
@media screen and (min-width: 1025px) and (max-width: 1440px) {
	.newbies-item {
		width: 520px;
		height: 260px;
	}
}
@media screen and (min-width: 1441px){
	.newbies-item {
		width: 600px;
		height: 300px;
	}
}
.newbies-item img {
	width: 100%;
	height: 100%;
}
</style>
<div id="newbies-list" class="newbies-list">
</div>
<script type="text/javascript">
function newbiesList(list) {
	function addNewbiesItem(item) {
		// var anchor = document.createElement('a');
		// var itemDiv = document.createElement('div');
		itemDiv = document.createElement('a');
		var img = document.createElement('img');

		img.onerror = function() {
			this.src = "__IMG_RES__/default_400_200.png";
		}

		// anchor.href = item.url;
		// anchor.target = '_blank';
		itemDiv.href = item.url;
		itemDiv.target = '_blank';
		itemDiv.className = "newbies-item";
		img.src = item.img;

		// document.getElementById('newbies-list').appendChild(anchor);
		// anchor.appendChild(itemDiv);
		document.getElementById('newbies-list').appendChild(itemDiv);
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