<?php
function translateStatus2Alert($status) {
	switch ($status) {
		case 2:
			return "alert-danger";
			break;
		case 1:
			return "alert-warning";
			break;
		case 0:
			return "alert-success";
			break;
		default:
			return "";
			break;
	}
}

function translateTag($model, $name) {
	$Tag = D($model.'Tag');
	$_tag = $Tag->getFieldByName($name, 'tag');
	return $_tag;
}

function getTags($model) {
	$Tag = D($model.'Tag');
	return $Tag->select();
}

function translateDate($timestamp) {
	return date('Y/m/d H:i', $timestamp);
}

function httpError($code, $msg) {
	header('HTTP/1.1 '.$code.' '.$msg);
}

/**
 * Remove a value-specified element from an array
 * @param  Object $needle The value of the element to be removed
 * @param  Array  $array  The array from which the element will be removed
 * @return int         How many elements removed
 */
function array_remove($needle, &$array) {
	$key = array_search($needle, $array);
	$cnt = 0;
	while (!($key === false || $key === null)) {
		$cnt++;
		if (is_int($key)) {
			array_splice($array, $key, 1);
		} else {
			unset($array[$key]);
		}
		$key = array_search($needle, $array);
	}
	return $cnt;
}

function htmlContentReadFilter($content) {
	return htmlspecialchars_decode($content);
}

function getAsset($path, $method) {
	// $filename = __ROOT__.'/Public/assets/'.(trim(trim($path), '/'));
	$filename = './Public/assets/'.(trim(trim($path), '/'));
	if (!is_string($method)) $method = "r";
	if ($method == "r") {
		$contents = file_get_contents($filename);
	} else {
		$handle = fopen($filename, $method);
		$contents = fread($handle, filesize($filename));
		fclose($handle);
	}
	return $contents;
}

function jsonFetchAction($filename) {
	$content = getAsset($filename);
	if ($content) echo $content;
	else httpError(404, "Content not found");
}

function noLF($str) {
	return str_replace(array("/r/n", "/r", "/n"), "", $str);
}

function base_auth($username, $password) {
	$tok = $username + ':' + $password;
	$hash = base64_encode($tok);
	return "Basic ".$hash;
}
function base_unauth($auth) {
	$str = substr($auth, 6);
	$str = base64_decode($str);
	$username = explode(':', $str)[0];
	$password = explode(':', $str)[1];
  return array("username"=>$username, "password"=>$password);
}

function isAuth() {
	if (is_string(I('get.username',null)) && is_string(I('get.password',null))) {
		return \Common\Modal\UserModal::auth(I('get.username',""), I('get.password',""));
	} elseif (is_string(I('post.username',null)) && is_string(I('post.password',null))) {
		return \Common\Modal\UserModal::auth(I('post.username',""), I('post.password',""));
	} elseif (session('user_id')) {
		$user = D('User')->find(intval(session('user_id')));
	}
}