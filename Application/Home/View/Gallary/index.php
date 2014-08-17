<link rel="stylesheet" type="text/css" href="__ROOT____CSS__/page-flag.css">
<style type="text/css">

.page-flag-container {
	left: 100px;
}
.page-flag {
	border-color: transparent #FF3366;
}

.catagory-list-container {
	padding-left: 100px;
	padding-right: 100px;
	margin-top: 50px;
}
.catagory-item {
	margin-bottom: 20px;
}
.catagory-item:last-child {
	margin-bottom: 0px;
}
.catagory-item-header {
	margin-bottom: 10px;
	font-size: 20px;
	color: #fff;
	text-shadow: 0 0 1px #000;
	cursor: pointer;
	padding: 3px;
	padding-left: 10px;

	user-select: none;
	-moz-user-select: none;
	-webkit-user-select: none;
	-o-user-select: none;
	-ms-user-select: none;
}
.catagory-item-header:hover {
	background-color: rgba(0,0,0, 0.25);
}
.catagory-item-header .fa {
	margin-right: 10px;
}
.catagory-item-body {
}
.gallary-list {
	padding-left: 5px;
}
.gallary-item {
	/*margin-left: 0px;
	margin-top: 0px;
	margin-bottom: 10px;
	margin-right: auto;*/

	display: block;
	float: left;

	margin: 5px;
	width: 150px;
	height: 170px;
	line-height: 170px;

	box-shadow: 0px 1px 3px 0px #000;
}
.gallary-item > div {
	position: relative;
	width: inherit;
	height: inherit;
	line-height: inherit;
	overflow: hidden;
}
.gallary-cover {
	width: 100%;
	height: 100%;
	position: absolute;
	overflow: hidden;
	background-color: #000033;
	line-height: inherit;
	text-align: center;
	vertical-align: middle;
	white-space: nowrap;
}
/*.gallary-cover:before, .gallary-cover:after {
	content: "aaa";
}*/
.gallary-cover .img-container {
	width: 10000px;
	height: 100%;
	left: 50%;
	margin-left: -5000px;
	position: absolute;
	text-align: center;
}
/* Adjustment */
.img-container img {
	margin-left: -4px;
}
.gallary-cover .img-container:before, .gallary-cover .img-container:after {
	content: "";
}
.gallary-cover img {
	width: 150px;
	height: auto;
}
.gallary-cover-mask {
	width: 100%;t
	height: 100%;
	background-image: url(__IMG_RES__/glass_mask.png);
	background: -moz-linear-gradient(left top,  rgba(255,255,255,0.5) 0%, rgba(255,255,255,0.1) 50%, rgba(255,255,255,0) 51%, rgba(255,255,255,0.5) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,rgba(255,255,255,0.5)), color-stop(50%,rgba(255,255,255,0.1)), color-stop(51%,rgba(255,255,255,0)), color-stop(100%,rgba(255,255,255,0.5))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(left top,  rgba(255,255,255,0.5) 0%,rgba(255,255,255,0.1) 50%,rgba(255,255,255,0) 51%,rgba(255,255,255,0.5) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(left top,  rgba(255,255,255,0.5) 0%,rgba(255,255,255,0.1) 50%,rgba(255,255,255,0) 51%,rgba(255,255,255,0.5) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(left top,  rgba(255,255,255,0.5) 0%,rgba(255,255,255,0.1) 50%,rgba(255,255,255,0) 51%,rgba(255,255,255,0.5) 100%); /* IE10+ */
	background: linear-gradient(to right bottom,  rgba(255,255,255,0.5) 0%,rgba(255,255,255,0.1) 50%,rgba(255,255,255,0) 51%,rgba(255,255,255,0.5) 100%); /* W3C */
	background-image: url(__IMG_RES__/glass_mask.png);
	visibility: hidden;
	background-size: cover;
	position: absolute;

}
.gallary-item:hover .gallary-cover-mask {
	visibility: visible;
}

@keyframes gallary-cover-description-show {
	0% {
		bottom: -30px;
	}
	100% {
		bottom: 0px;
	}
}
@-webkit-keyframes gallary-cover-description-show {
	0% {
		bottom: -30px;
	}
	100% {
		bottom: 0px;
	}
}
@-moz-keyframes gallary-cover-description-show {
	0% {
		bottom: -30px;
	}
	100% {
		bottom: 0px;
	}
}
@-o-keyframes gallary-cover-description-show {
	0% {
		bottom: -30px;
	}
	100% {
		bottom: 0px;
	}
}
@keyframes gallary-cover-description-hide {
	0% {
		bottom: 0px;
	}
	100% {
		bottom: -30px;
	}
}
@-webkit-keyframes gallary-cover-description-hide {
	0% {
		bottom: 0px;
	}
	100% {
		bottom: -30px;
	}
}
@-moz-keyframes gallary-cover-description-hide {
	0% {
		bottom: 0px;
	}
	100% {
		bottom: -30px;
	}
}
@-o-keyframes gallary-cover-description-hide {
	0% {
		bottom: 0px;
	}
	100% {
		bottom: -30px;
	}
}
.gallary-cover-description {
	position: absolute;
	width: 100%;
	height: 30px;
	line-height: 30px;
	vertical-align: middle;
	color: #fff;
	white-space: nowrap;
	background-color: rgba(0,0,0,0.4);
	padding-left: 5px;
	bottom: -30px;

	animation: gallary-cover-description-hide 0.2s forwards;
	-webkit-animation: gallary-cover-description-hide 0.2s forwards;
	-moz-animation: gallary-cover-description-hide 0.2s forwards;
	-o-animation: gallary-cover-description-hide 0.2s forwards;
	-ms-animation: gallary-cover-description-hide 0.2s forwards;
}
.gallary-item:hover .gallary-cover-description {
	animation: gallary-cover-description-show 0.2s forwards;
	-webkit-animation: gallary-cover-description-show 0.2s forwards;
	-moz-animation: gallary-cover-description-show 0.2s forwards;
	-o-animation: gallary-cover-description-show 0.2s forwards;
	-ms-animation: gallary-cover-description-show 0.2s forwards;
}
</style>


<include file="Public:common_page_flag" />
<div class="catagory-list-container">
	<volist name="gallaries" id="tag">
		<div class="catagory-item">
			<div id="catagory-header-{$tag.tag}" class="catagory-item-header" data-toggle="collapse" data-target="#catagory-body-{$tag.tag}"><span class="fa fa-tag"></span>{$tag.tag|translateTag="Gallary",###}</div>
			<div id="catagory-body-{$tag.tag}" class="collapse in catagory-item-body">
				<div class="gallary-list">
					<volist name="tag.gallaries" id="gallary">
						<a class="gallary-item" href="{:U('/gallery/'.$gallary['id'])}">
							<div>
								<div class="gallary-cover">
									<div class="img-container">
										<span><img src="{$gallary.cover_url}" /></span>
									</div>
								</div>
								<div class="gallary-cover-mask"></div>
								<div class="gallary-cover-description">
									<span>{$gallary.title}</span>
								</div>
							</div>
						</a>
					</volist>
					<div style="clear:both;"></div>
				</div>
			</div>
		</div>
	</volist>
</div>

<script type="text/javascript">
$('.gallary-item img').load(function (argument) {
	var whr = parseFloat($('.gallary-item').width())/parseFloat($('.gallary-item').height());
	if (parseFloat($(this).width())/parseFloat($(this).height()) > whr) {
		$(this).css('height', $('.gallary-item').height() + 'px');
		$(this).css('width', 'auto');
	} else {
		$(this).css('height', 'auto');
		$(this).css('width', $('.gallary-item').width() + 'px');
	}
});
$('.gallary-item img').error(function() {
	this.src = "__IMG_RES__/default_150_170.png";
})
</script>
