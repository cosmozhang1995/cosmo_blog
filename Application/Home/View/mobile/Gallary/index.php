<style type="text/css">
.gallary-list {
}
.gallary-list-tag {
	height: auto;
	line-height: 1;
	padding-top: 5px;
	padding-bottom: 5px;
	font-size: 16px;
	font-family: "ff-tisa-web-pro-1","ff-tisa-web-pro-2","Lucida Grande","Helvetica Neue",Helvetica,Arial,"Hiragino Sans GB","Hiragino Sans GB W3","WenQuanYi Micro Hei",sans-serif;
	background-color: rgba(255,255,255,1);
	margin-top: 10px;
}
.gallary-list-tag:first-child {
	margin-top: 0px;
}
.gallary-list-item {
	padding-top: 0px;
	padding-bottom: 0px;
	padding-left: 0px;
	font-family: inherit;
}
.gallary-list-item .gallary-list-item-thumbnail {
	display: inline-block;
	float: left;
	height: 50px;
	width: 50px;
}
.gallary-list-item .gallary-list-item-thumbnail img {
	width: 100%;
	height: 100%;
}
.gallary-list-item .gallary-list-item-info {
	display: block;
	margin-left: 50px;
	padding-left: 5px;
}
.gallary-list-item .gallary-list-item-info .title {
	height: 25px;
	line-height: 25px;
	font-size: 16px;
	vertical-align: middle;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
}
.gallary-list-item .gallary-list-item-info .subtitle {
	height: 15px;
	line-height: 20px;
	font-size: 12px;
	vertical-align: middle;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
	color: #999;
}

.nav {
	margin-top: 10px;
}
.nav-item {
	height: 30px;
	line-height: 30px;
	font-size: 12px;
}
</style>
<div class="menu gallary-list">
	<volist name="gallaries" id="tag">
		<div class="menu-item gallary-list-tag">{$tag.tag|translateTag="Gallary",###}</div>
		<volist name="tag.gallaries" id="gallary">
			<a href="{:U('/gallery/'.$gallary['id'])}" class="menu-item gallary-list-item">
				<div class="gallary-list-item-thumbnail">
					<img src="{$gallary.cover_url}" onerror="javascript:this.src='__IMG_RES__/default_180_210.png'" />
				</div>
				<div class="gallary-list-item-info">
					<div class="title">{$gallary.title}</div>
					<!-- <div class="subtitle">{$gallary.create_time|translateDate}</div> -->
					<div class="subtitle">共&nbsp;{$gallary.photo_count}&nbsp;张照片</div>
				</div>
			</a>
		</volist>
	</volist>
</div>
<!-- <div class="menu nav" style="background-color:rgba(255,255,255,0.7);position:relative;">
	<a href="<?php echo ($page==1?'javascript:void(0);':U('/gallarys/p/'.($page-1).'/'.$pn)) ?>" class="menu-item inline nav-item" style="width:60px; position:absolute; top:0px; left:0px; text-align:left;">
		<i class="fa fa-fw fa-arrow-left"></i>上一页
	</a>
	<div class="menu-item" disabled style="margin-left:78px;margin-right:78px; height:30px; line-height:30px; text-align:center; font-size:12px;">
		第&nbsp;{$page}&nbsp;页
	</div>
	<a href="<?php echo ($page==$pt?'javascript:void(0);':U('/gallarys/p/'.($page+1).'/'.$pn)) ?>" class="menu-item inline nav-item" style="width:60px; position:absolute; top:0px; right:0px; text-align:right;">
		下一页<i class="fa fa-fw fa-arrow-right"></i>
	</a>
</div> -->