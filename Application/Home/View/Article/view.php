<style type="text/css">

.article-container {
	background-color: #0099FF;
	padding-left: 100px;
	padding-right: 100px;
	padding-top: 30px;
	margin-top: 50px;
	box-shadow: 0 0 3px rgba(0,0,0,0.5);
}

.title {
	margin-top: 0px;
	margin-bottom: 10px;
	font-size: 30px;
	height: 70px;
	line-height: 70px;
	vertical-align: middle;
	font-family: "ff-tisa-web-pro-1","ff-tisa-web-pro-2","Lucida Grande","Helvetica Neue",Helvetica,Arial,"Hiragino Sans GB","Hiragino Sans GB W3","WenQuanYi Micro Hei",sans-serif;
	/*text-shadow: 1px 1px 2px #3399FF, 0 0 0 #000;
	color: rgba(0,0,0,0.4);*/
	text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
	color: #fff;
}

.subtitle {
	height: 40px;
	font-size: 18px;
	vertical-align: middle;
	line-height: 40px;
}

.calendar {
	color: #EEE;
	margin-right: 10px;
}
.calendar:hover {
	color: #fff;
}

.label {
	margin-left: auto;
	margin-right: 0px;
}
.label:hover {
	box-shadow: 1px 1px 1px 0 rgba(0,0,0,0.4) inset, -1px -1px 1px 0 rgba(255,255,255,0.4) inset;
}

.content {
	margin-top: 20px;
	padding-top: 10px;
	padding-bottom: 40px;
	color: #fff;
}

.main-container {
	padding-left: 0px;
	padding-right: 0px;
}
</style>

<div class="article-container margin-horizontal">
	<div class="title">{$article.title}</div>
	<div class="subtitle">
		<a class="button"><span class="calendar">{$article.create_time|translateDate}</span></a>
		<a class="button"><span class="label label-warning">{$article.tag|translateTag="Article",###}</span></a>
	</div>
	<div class="divider divider-horizontal"></div>
	<div class=content>
		{$article.content}
	</div>
</div>