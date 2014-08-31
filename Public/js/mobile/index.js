$('.home-page-item').resize(function(){
	$(this).css('line-height', $(this).height() + 'px');
	$(this).css('font-size', Math.min($(this).height(), $(this).width()) + 'px');
});
$('.home-page-item').on('touchstart', function() {
	$('.home-page-item').removeClass('active');
	$(this).addClass('active');
});
$('.home-page-item').on('touchend', function() {
	$(this).removeClass('active');
});
$(document).ready(function() {
	$('.home-page-item').resize();
});