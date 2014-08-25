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