// JavaScript Document

function nodeContains(parent, child) {
	if (parent.contains) {
		return parent != child && parent.contains(child);
	} else {
		return !!(parent.compareDocumentPosition(child));
	}
}
function getEvent(e) {
	return e || window.event;
}
function checkHover(e, target) {
	var rel = getEvent(e).relatedTarget;
	var from = getEvent(e).fromElement;
	var to = getEvent(e).toElement;
	if (getEvent(e).type="mouseover") {
		return !nodeContains(target, rel || from) && !( (rel||from) === target);
	} else {
		return !nodeContains(target, rel || to  ) && !( (rel||to)   === target);
	}
}
$(document).ready(function(e) {
	$('#fanleaves-container').css('visibility','hidden');
    $('#fanleaves-container').addClass('fanleaves-container-scaledoff');
	setTimeout(function() {
		$('#fanleaves-container').css('visibility','visible');
	}, 100);
	$('#center-circle').mouseover(function(e) {
		console.log(checkHover);
    if (checkHover(e, this)) {
			fanleafEnable = false;
			$('#fanleaves-container').removeClass('fanleaves-container-scaledoff');
			setTimeout(fanleafEnable = true, 500);
		}
  });
	$('.fanleaf-container').mouseover(function(e) {
		console.log('outevent', e.relatedTarget, e.target);
    if (e.relatedTarget.classList.contains('fanleaf') && e.target.classList.contains('fanleaf-container')) {
			console.log('out');
			fanleafEnable = false;
			$('#fanleaves-container').addClass('fanleaves-container-scaledoff');
			setTimeout(fanleafEnable = true, 500);
		}
  });
});