<link rel="stylesheet" type="text/css" href="__ROOT____CSS__/page-flag.css">
<style type="text/css">

@media screen and (max-width: 1150px) {
	.left-fan-container {
		display: none;
	}
}

.article-list-container {
	width: auto;
	margin: 0 auto;
	padding-left: 100px;
	padding-right: 100px;
}

.article-list {
}

@keyframes item-hover-on {
	from {
		border-left-width: 3px;
		padding-left: 30px;
	}
	to {
		border-left-width: 18px;
		padding-left: 15px;
	}
}
@-moz-keyframes item-hover-on {
	from {
		border-left-width: 3px;
		padding-left: 30px;
	}
	to {
		border-left-width: 18px;
		padding-left: 15px;
	}
}
@-webkit-keyframes item-hover-on {
	from {
		border-left-width: 3px;
		padding-left: 30px;
	}
	to {
		border-left-width: 18px;
		padding-left: 15px;
	}
}
@-o-keyframes item-hover-on {
	from {
		border-left-width: 3px;
		padding-left: 30px;
	}
	to {
		border-left-width: 18px;
		padding-left: 15px;
	}
}

@keyframes item-hover-off {
	from {
		border-left-width: 18px;
		padding-left: 15px;
	}
	to {
		border-left-width: 3px;
		padding-left: 30px;
	}
}
@-moz-keyframes item-hover-off {
	from {
		border-left-width: 18px;
		padding-left: 15px;
	}
	to {
		border-left-width: 3px;
		padding-left: 30px;
	}
}
@-webkit-keyframes item-hover-off {
	from {
		border-left-width: 18px;
		padding-left: 15px;
	}
	to {
		border-left-width: 3px;
		padding-left: 30px;
	}
}
@-o-keyframes item-hover-off {
	from {
		border-left-width: 18px;
		padding-left: 15px;
	}
	to {
		border-left-width: 3px;
		padding-left: 30px;
	}
}

.article-item {
	display: block;
	height: auto;
	padding: 10px 30px;
	border-color: #00CC99;
	border-style: solid;
	border-width: 1px;
	border-left-width: 3px;
	margin-bottom: 10px;
	background-color: #ffffff;

	width: 100%;

	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-o-box-sizing: border-box;
	-mos-box-sizing: border-box;
	-ms-box-sizing: border-box;

	box-shadow: 0px 1px 7px -2px #000;

	animation: item-hover-off 0.5s forwards;
	-o-animation: item-hover-off 0.5s forwards;
	-moz-animation: item-hover-off 0.5s forwards;
	-webkit-animation: item-hover-off 0.5s forwards;
}
.article-item:last-child {
	margin-bottom: 0px;
}
.article-item:hover {
	/*border-left-width: 18px;*/
	/*padding-left: 15px;*/
	/*border-width: 2px;*/
	/*padding: 10px 28px;*/

	animation: item-hover-on 0.5s forwards;
	-o-animation: item-hover-on 0.5s forwards;
	-moz-animation: item-hover-on 0.5s forwards;
	-webkit-animation: item-hover-on 0.5s forwards;
}
a.article-item {
	color: #000000;
	text-decoration: none;
}
a.article-item:hover {
	color: #000000;
	text-decoration: none;
}
a.article-item:link {
	color: #000000;
	text-decoration: none;
}
a.article-item:active {
	color: #000000;
	text-decoration: none;
}
a.article-item:visited {
	color: #000000;
	text-decoration: none;
}

.article-title {
	font-family: Helvetica, Tahoma, Arial, STXihei, "华文细黑", "Microsoft YaHei", "微软雅黑", SimSun, "宋体", Heiti, "黑体", sans-serif;
	font-style: bold;
	font-size: 18px;
}
.article-summary {
	color: #999999;
	font-size: 14px;
}

.article-time {
	font-size: 8px;
	/*color: #00CC99;*/
}

.nav-container {
	margin-top: 20px;
	font-size: 0px;
	text-align: center;
}
.nav-container .nav {
	width: auto;
	/*max-width: 500px;*/
	display: inline-block;
	border-radius: 3px;
	border: 1px solid #00CC99;
}
.nav-container .nav .nav-item {
	display: inline-block;
	width: 30px;
	height: 25px;
	font-size: 12px;
	line-height: 25px;
	vertical-align: middle;
	text-align: center;
	border-right: 1px solid #00CC99;
}
.nav-container .nav .nav-item:last-child {
	border-right: none;
}
.nav-item {
	color: #000000;
	cursor: pointer;
	text-decoration: none;
}
.nav-item:link {
	color: #000000;
	text-decoration: none;
}
.nav-item:active {
	color: #000000;
	text-decoration: none;
}
.nav-item:visited {
	color: #000000;
	text-decoration: none;
}
.nav-item:hover, .nav-item[current] {
	background-color: #00CC99;
	color: #ffffff;
	text-decoration: none;
}
.nav-item[disabled] {
	background-color: #EEEEEE;
	cursor: default;
}
.nav-item[disabled]:hover {
	color: #000000;
	background-color: #EEEEEE;
}


</style>


<div class="article-list-container">
	<include file="Public:common_page_flag" />
	<!-- <div class="nav-arr-container {$page==1?'hidden':''}"><a class="nav-arr nav-prev" href=<?php echo ($page==1?'javascript:void(0);':U('/articles/p/'.($page-1).'/'.$pn)) ?>>&laquo;</a></div> -->
	<div class="article-list">
		<volist name='list' id='vo'>
			<a class="article-item" href="{:U('/article/'.$vo['id'])}">
				<p class="article-title">{$vo.title}</p>
				<p class="article-summary">{$vo.summary}</p>
				<span class="article-time">编辑于 {$vo.create_time|translateDate}</span>
				<!-- <span class="article-label">{$vo.tag|translateTag="Article",###}</span> -->
			</a>
		</volist>
	</div>
	<!-- <div class="nav-arr-container {$page==$pt?'hidden':''}"><a class="nav-arr nav-next" href=<?php echo ($page==$pt?'javascript:void(0);':U('/articles/p/'.($page+1).'/'.$pn)) ?> >&raquo;</a></div> -->
	<div class="nav-container">
		<div class="nav">
			<a href=<?php echo ($page<=1?'javascript:void(0);':U('/articles/p/'.($page-1).'/'.$pn)) ?> class="nav-item nav-prev" {$page==1?'disabled="disabled"':''}>&laquo;</a>
			<?php $iter_page_start = max(1, $page - 3); ?>
			<?php $iter_page_end = $iter_page_start + 6; ?>
			<?php for ($i = $iter_page_start; $i <= $iter_page_end; $i++): ?>
				<a href=<?php echo (($i>$pt||$i<1)?'javascript:void(0);':U('/articles/p/'.$i.'/'.$pn)) ?> class="nav-item nav-page" <?php echo ($i>$pt||$i<1)?'disabled="disabled"':''; ?> <?php echo ($i==$page)?'current="current"':''; ?>>{$i}</a>
			<?php endfor; ?>
			<a href=<?php echo ($page>=$pt?'javascript:void(0);':U('/articles/p/'.($page+1).'/'.$pn)) ?> class="nav-item nav-next" {$page==$pt?'disabled="disabled"':''}>&raquo;</a>
		</div>
	</div>
</div>
