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