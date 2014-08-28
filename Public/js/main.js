// JavaScript Document

//----------------
//read COOKIE
function getCookie(cookiename) {
	var result;
	var mycookie = document.cookie;
	var start2 = mycookie.indexOf(cookiename + "=");
	if (start2 > -1) {
		start = mycookie.indexOf("=", start2) + 1;
		var end = mycookie.indexOf(";", start);
		if (end == -1) {
			end = mycookie.length;
		}
		result = unescape(mycookie.substring(start, end));
	}
	return result;
}
//----------------
//write COOKIE
function setCookie(cookiename, cookievalue, hours) {
	var date = new Date();
	if (hours==0) {
		document.cookie = cookiename + "=" + cookievalue + "; path=/";
	} else {
		date.setTime(date.getTime() + Number(hours) * 3600 * 1000);
		document.cookie = cookiename + "=" + cookievalue + "; path=/;expires = " + date.toGMTString();
	};
}

function stopPropagation(e) {
	console.log(e);
	e = e || window.event;
	if(e.stopPropagation) { //W3C阻止冒泡方法
		e.stopPropagation();
	} else {
		e.cancelBubble = true; //IE阻止冒泡方法
	}
}

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

function parseBool(val) {
	switch (typeof val) {
		case "string":
			if (val == "true") return true;
			else return false;
			break;
		case "number":
			if (parseInt(val) > 0) return true;
			else return false;
			break;
		case "boolean":
			return val;
			break;
		case "object":
			if (val === null) return false;
			else return true;
			break;
		case "function":
			return true;
			break;
		case "undefined":
			return false;
			break;
	}
	return false;
}

Array.prototype.remove = function(ele) {
	for (var i = 0; i < this.length; i++) {
		if (this[i] === ele) {
			this.splice(i);
			return i;
		}
	}
	return -1;
}

Array.prototype.indexOf = function(ele) {
	for (var i = 0; i < this.length; i++) {
		if (this[i] === ele) {
			return i;
		}
	}
	return -1;
}

Element.prototype.removeAllChildNodes = function() {
	var childs = this.childNodes;
	for (var i = childs.length - 1; i >= 0; i--) {
		this.removeChild(childs[i]);
	}
}

Element.prototype.getPosition = function() {
	function getpos(e) {  
		var t=e.offsetTop;  
		var l=e.offsetLeft;  
		var height=e.offsetHeight; 
		var parent = e; 
		while(parent=parent.offsetParent) {  
			t+=parent.offsetTop;
			l+=parent.offsetLeft;
		}
		return {top:t,left:l};
	}
	var tlpos = getpos(this);
	tlpos.right = tlpos.left + this.clientWidth;
	tlpos.bottom = tlpos.top + this.clientHeight;
	return tlpos;
}

$(document).ready(function(e) {
	// Left fan-nav widget
	var userAgent = navigator.userAgent;
	var isOpera = userAgent.indexOf("Opera") > -1;
	//$('#left-fan-container').css('visibility','hidden');
	if (App.closeFanNav === true) {
		$('.main-container').addClass('no-padding-left');
	} else {
		if (!isOpera) {
			if (!(getCookie('fan_nav')=='no')) {
				//$('#left-fan').css('opacity','0');
				//var initialtop = $('#left-fan-container').css('top');
				//$('#left-fan-container').css('top','-600px');
				//$('#left-fan').css('z-index','-5');
				$('.left-fan-toggle-content > .fa').removeClass('fa-chevron-down');
				$('.left-fan-toggle-content > .fa').addClass('fa-chevron-up');
				$('.left-fan-toggle-content').attr('onclick', "setFanNav(false); return false;");
				if (getCookie('no_nav_toggle_indicator')=='yes') $('#left-fan-toggle-indicator').css('display', 'none');
				$('.main-container').removeClass('no-padding-left');
				setTimeout(function() {
					//$('#left-fan').css('opacity','1');
					//$('#left-fan-container').css('visibility','visible');
					$('#left-fan-container').animate({top:'-100px'},600,'swing',function() {
						$('#left-fan-toggle-indicator').animate({opacity:0.7},200,'swing',function(){
							setTimeout(function(){
								$('#left-fan-toggle-indicator').animate({opacity:0.0},200,'swing',function() {
									$('#left-fan-toggle-indicator').css('display', 'none');
								});
							},3000);
						})
					});
				},500);
			} else {
				$('#left-fan-container').css('display', 'none');
				$('#left-fan-toggle-indicator').css('display', 'none');
				$('.left-fan-toggle-content > .fa').removeClass('fa-chevron-up');
				$('.left-fan-toggle-content > .fa').addClass('fa-chevron-down');
				$('.left-fan-toggle-content').attr('onclick', "setFanNav(true); return false;");
				$('.main-container').addClass('no-padding-left');
			}
		} else {
			$('#left-fan-container').css('display', 'none');
			$('#left-fan-toggle-container').css('display', 'none');
			$('#left-fan-toggle-indicator').css('display', 'none');
			$('.main-container').removeClass('no-padding-left');
		};
	}
	
});

function setNoFanNavToggleIndicator() {
	setCookie('no_nav_toggle_indicator', 'yes', 0);
	$('#left-fan-toggle-indicator').animate({opacity:0.0},200,'swing',function() {
		$('#left-fan-toggle-indicator').css('display', 'none');
	});
}
i=0;
function setFanNav(show) {
	setCookie('fan_nav', show?'yes':'no', 0);
	if (show) {
		$('#left-fan-container').css('display', 'block');
		//$('#left-fan').css('opacity','1');
		$('#left-fan-container').animate({top:'-100px'},600,'swing', function() {
			$('.left-fan-toggle-content > .fa').removeClass('fa-chevron-down');
			$('.left-fan-toggle-content > .fa').addClass('fa-chevron-up');
			$('.left-fan-toggle-content').attr('onclick', "setFanNav(false); return false;");
		});
		$('.main-container').removeClass('no-padding-left');
	} else {
		$('#left-fan-container').animate({top:'-600px'},600,'swing', function() {
			$('#left-fan-container').css('display', 'none');
			$('.left-fan-toggle-content > .fa').removeClass('fa-chevron-up');
			$('.left-fan-toggle-content > .fa').addClass('fa-chevron-down');
			$('.left-fan-toggle-content').attr('onclick', "setFanNav(true); return false;");
			$('.main-container').addClass('no-padding-left');
		});
		$('#left-fan-toggle-indicator').animate({opacity:0.0},200,'swing',function() {
			$('#left-fan-toggle-indicator').css('display', 'none');
		});
	};
}

function onBodyScroll() {
	if (document.body.scrollTop <= 30) {
		$('#goto-top').hide();
	} else {
		$('#goto-top').show();
	}
}

function Base64() {
	// private property  
	_keyStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";  

	// public method for encoding  
	this.encode = function (input) {  
		var output = "";  
		var chr1, chr2, chr3, enc1, enc2, enc3, enc4;  
		var i = 0;  
		input = _utf8_encode(input);  
		while (i < input.length) {  
			chr1 = input.charCodeAt(i++);  
			chr2 = input.charCodeAt(i++);  
			chr3 = input.charCodeAt(i++);  
			enc1 = chr1 >> 2;  
			enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);  
			enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);  
			enc4 = chr3 & 63;  
			if (isNaN(chr2)) {  
				enc3 = enc4 = 64;  
			} else if (isNaN(chr3)) {  
				enc4 = 64;  
			}  
			output = output +  
			_keyStr.charAt(enc1) + _keyStr.charAt(enc2) +  
			_keyStr.charAt(enc3) + _keyStr.charAt(enc4);  
		}  
		return output;  
	}  
   
	// public method for decoding  
	this.decode = function (input) {  
		var output = "";  
		var chr1, chr2, chr3;  
		var enc1, enc2, enc3, enc4;  
		var i = 0;  
		input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");  
		while (i < input.length) {  
			enc1 = _keyStr.indexOf(input.charAt(i++));  
			enc2 = _keyStr.indexOf(input.charAt(i++));  
			enc3 = _keyStr.indexOf(input.charAt(i++));  
			enc4 = _keyStr.indexOf(input.charAt(i++));  
			chr1 = (enc1 << 2) | (enc2 >> 4);  
			chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);  
			chr3 = ((enc3 & 3) << 6) | enc4;  
			output = output + String.fromCharCode(chr1);  
			if (enc3 != 64) {  
				output = output + String.fromCharCode(chr2);  
			}  
			if (enc4 != 64) {  
				output = output + String.fromCharCode(chr3);  
			}  
		}  
		output = _utf8_decode(output);  
		return output;  
	}  

	// private method for UTF-8 encoding  
	_utf8_encode = function (string) {  
		string = string.replace(/\r\n/g,"\n");  
		var utftext = "";  
		for (var n = 0; n < string.length; n++) {  
			var c = string.charCodeAt(n);  
			if (c < 128) {  
				utftext += String.fromCharCode(c);  
			} else if((c > 127) && (c < 2048)) {  
				utftext += String.fromCharCode((c >> 6) | 192);  
				utftext += String.fromCharCode((c & 63) | 128);  
			} else {  
				utftext += String.fromCharCode((c >> 12) | 224);  
				utftext += String.fromCharCode(((c >> 6) & 63) | 128);  
				utftext += String.fromCharCode((c & 63) | 128);  
			}  
		}  
		return utftext;  
	}  

	// private method for UTF-8 decoding  
	_utf8_decode = function (utftext) {  
		var string = "";  
		var i = 0;  
		var c = c1 = c2 = 0;  
		while ( i < utftext.length ) {  
			c = utftext.charCodeAt(i);  
			if (c < 128) {  
				string += String.fromCharCode(c);  
				i++;  
			} else if((c > 191) && (c < 224)) {  
				c2 = utftext.charCodeAt(i+1);  
				string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));  
				i += 2;  
			} else {  
				c2 = utftext.charCodeAt(i+1);  
				c3 = utftext.charCodeAt(i+2);  
				string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));  
				i += 3;  
			}  
		}  
		return string;  
	}  
}
base64 = new Base64();
function base_auth(username, password) {
	var tok = username + ':' + password;
	var hash = base64.encode(tok);
	return "Basic " + hash;
}
function base_unauth(auth) {
	var str = auth.substr(6);
	str = base64.decode(str);
	username = str.split(':')[0];
	password = str.split(':')[1];
  return {
  	"username": username, 
  	"password": password
  };
}

$(document).ready(function() {
	onBodyScroll();
});