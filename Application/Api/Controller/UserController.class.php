<?php
namespace Api\Controller;
use Think\Controller;

class UserController extends \Api\Controller\ModelBasedController {
	var $modelName = "User";

	public function getFields() {
		$fields = parent::getFields();
		array_remove('password', $fields);
		return $fields;
	}

	function canGet() {
		$user = getUser();
		// print_r($user);
		if (!$user) return false;
		if (I('get.id', null) === null) $_GET['id'] = intval($user['id']);
		if (intval($user['id']) == intval(I('get.id'))) return true;
		else return false;
	}
	function canPost() {
		return true;
	}
	function canPut() {
		$user = getUser();
		$inputData = get_object_vars(json_decode($this->getRawData()));
		if (!(intval($inputData['id']) === intval($user['id']))) return false;
		if (isset($inputData['password']) && !(md5($inputData['oldpassword'])===$user['password'])) return false;
		else return true;
	}
}