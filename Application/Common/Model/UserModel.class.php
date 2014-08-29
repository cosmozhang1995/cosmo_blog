<?php
namespace Common\Model;
use Think\Model\AdvModel;
class UserModel extends AdvModel {
	protected $_filter = array(
		'id'=>array(null,'intval', false),
		'password'=>array('md5',null, false),
		'create_time'=>array(null,'intval', false),
	);
	protected $_validate = array(
		array('name','/^[a-zA-Z][a-zA-Z\d_]{3,15}$/','用户名格式不正确，用户名必须为4-16个字符，只能由字母、数字和下划线组成且只能以字母开头',0,'regex'),
		array('password','/^[a-zA-Z\d][a-zA-Z\d_\/\\\-]{5,15}$/','密码格式不正确，密码必须为4-16个字符，且不能包含特殊符号',0,'regex'),
		array('email','email','E-mail格式不正确哦'),
		array('alias','require','昵称不能为空哦'),
		array('name','','用户名已经被抢注啦',0,'unique'),
		array('email','','邮箱已经被抢注啦',0,'unique')
	);
	protected $_auto = array (
		array('create_time', 'time', 1, 'function')
	);

	static public function auth($username="", $password="") {
		$user = D('User')->where(array('name'=>$username, 'password'=>$password))->find();
		if ($user) return true;
		else return false;
	}
}