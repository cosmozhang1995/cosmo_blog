$('.button').on('touchstart', function() {
	// $('.button').removeClass('active');
	$(this).addClass('active');
});
$('.button').on('touchend', function() {
	$(this).removeClass('active');
});
$('.button').on('touchmove', function() {
	$(this).removeClass('active');
});

$('.top-nav-item').on('touchstart', function() {
	// $('.top-nav-item').removeClass('active');
	$(this).addClass('active');
});
$('.top-nav-item').on('touchend', function() {
	$(this).removeClass('active');
});
$('.top-nav-item').on('touchmove', function() {
	$(this).removeClass('active');
});

$('.menu-item').on('touchstart', function() {
	// $('.menu-item').removeClass('active');
	$(this).addClass('active');
});
$('.menu-item').on('touchend', function() {
	$(this).removeClass('active');
});
$('.menu-item').on('touchmove', function() {
	$(this).removeClass('active');
});

var onBodyScroll = function() {
}