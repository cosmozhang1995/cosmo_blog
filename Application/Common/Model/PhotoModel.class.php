<?php
namespace Common\Model;
use Think\Model\AdvModel;
class PhotoModel extends AdvModel {
	protected $_filter = array(
		'id'=>array(null,'intval', false),
		'create_time'=>array(null,'intval', false),
	);
	protected $_validate = array(
		array('title', 'require', '标题必需'),
	);
	protected $_auto = array (
		array('create_time', 'time', 1, 'function')
	);
}