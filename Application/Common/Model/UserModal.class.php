<?php
namespace Common\Model;
use Think\Model\AdvModel;
class UserModel extends AdvModel {
	protected $_filter = array(
		'id'=>array(null,'intval', false),
		'create_time'=>array(null,'intval', false),
	);
	protected $_validate = array(
	);
	protected $_auto = array (
		array('create_time', 'time', 1, 'function')
	);

	static public $auth = function($username="", $password="") {
		$user = D('User')->where(array('name'=>$username, 'password'=>$password))->find();
		if ($user) return true;
		else return false;
	};
}