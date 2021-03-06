<?php
namespace Common\Model;
use Think\Model\AdvModel;
class GallaryModel extends AdvModel {
	protected $_filter = array(
		'id'=>array(null,'intval', false),
		'create_time'=>array(null,'intval', false),
	);
	protected $_validate = array(
		array('title', 'require', '标题必需', 0),
		array('tag', 'require', '标签必需', 0)
	);
	protected $_auto = array (
		array('create_time', 'time', 1, 'function')
	);
}