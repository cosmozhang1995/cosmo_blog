<?php
namespace Common\Model;
use Think\Model;
class PhotoModel extends Model {
	protected $_validate = array(
		array('title', 'require', '标题必需'),
	);
	protected $_auto = array (
		array('create_time', 'time', 1, 'function')
	);
}