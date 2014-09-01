<style type="text/css">
.main-container {
	padding-top: 10px;
	padding-bottom: 10px;
	margin-left: 10px;
	margin-right: 10px;
}
.article-list {
}
.article-list-item {
	padding-top: 5px;
	padding-bottom: 5px;
	font-family: inherit;
}
.article-list-item .title {
	height: 25px;
	line-height: 25px;
	font-size: 16px;
	vertical-align: middle;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
}
.article-list-item .subtitle {
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
<div class="menu article-list">
	<volist name="list" id="vo">
		<a href="{:U('/article/'.$vo['id'])}" class="menu-item article-list-item">
			<div class="title">{$vo.title}</div>
			<div class="subtitle">{$vo.create_time|translateDate}</div>
		</a>
	</volist>
</div>
<div class="menu nav" style="background-color:rgba(255,255,255,0.7);position:relative;">
	<a href="<?php echo ($page==1?'javascript:void(0);':U('/articles/p/'.($page-1).'/'.$pn)) ?>" class="menu-item inline nav-item" style="width:60px; position:absolute; top:0px; left:0px; text-align:left;">
		<i class="fa fa-fw fa-arrow-left"></i>上一页
	</a>
	<div class="menu-item" disabled style="margin-left:78px;margin-right:78px; height:30px; line-height:30px; text-align:center; font-size:12px;">
		第&nbsp;{$page}&nbsp;页
	</div>
	<a href="<?php echo ($page==$pt?'javascript:void(0);':U('/articles/p/'.($page+1).'/'.$pn)) ?>" class="menu-item inline nav-item" style="width:60px; position:absolute; top:0px; right:0px; text-align:right;">
		下一页<i class="fa fa-fw fa-arrow-right"></i>
	</a>
</div>
