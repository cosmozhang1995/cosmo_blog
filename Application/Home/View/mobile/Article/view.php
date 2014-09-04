<style type="text/css">
.title {
	font-size: 18px;
	font-family: "ff-tisa-web-pro-1","ff-tisa-web-pro-2","Lucida Grande","Helvetica Neue",Helvetica,Arial,"Hiragino Sans GB","Hiragino Sans GB W3","WenQuanYi Micro Hei",sans-serif;
}
</style>
<div class="box">
	<div class="box-header">
		<div class="title">{$article.title}</div>
	</div>
	<div class="box-body"><div id="content">{$article.content}</div></div>
</div>
<script type="text/javascript">
$('#content').resize(function() {
	$(this).find('img').css('width', 'auto');
	$(this).find('img').each(function() {
		var parentWidth = $(this).parent().width();
		var thisWidth = $(this).width();
		console.log(parentWidth, thisWidth);
		if (thisWidth > parentWidth) {
			$(this).css('width', parentWidth + 'px');
			console.log($(this).css('width'));
			console.log($(this).width());
			this.style = parentWidth + 'px';
			console.log(this);
		} else {
			$(this).css('width', thisWidth + 'px');
		}
		$(this).css('height', 'auto');
	});
});
$(document).ready(function() {
	$('#content').resize();
});
</script>