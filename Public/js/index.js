// JavaScript Document

fanleafEnable = true;
$(document).ready(function(e) {
	$('.center-circle-content').hide();
	$('#center-circle-content-portrait').show();
	var easetime = 100;
	var trans_to = 'portrait';
	var in_trans = false;
	function trans() {
		setTimeout(doTrans, easetime/2);
	}
	function doTrans() {
		if (!in_trans) {
			in_trans = true;
			if (!($('#center-circle-content-' + trans_to).length === 0)) {
				$('.center-circle-content').fadeOut(easetime, function() {
				});
				$('#center-circle-content-' + trans_to).fadeIn(easetime, function() {
					in_trans = false;
				});
			} else {
				in_trans = false;
			}
		}
	}
	$('.fanleaf').mouseover(function(e) {
		if (checkHover(e, this) && fanleafEnable) {
			trans_to = $(this).attr('id').split('-')[1];
			trans();
		}
	});
	$('.fanleaf').mouseout(function(e) {
		if (checkHover(e, this) && fanleafEnable) {
			trans_to = 'portrait';
			trans();
		}
	});
});