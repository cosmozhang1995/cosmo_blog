<?php
namespace Common\Model;
use Think\Model;
class GallaryModel extends Model {
	protected $_validate = array(
		array('title', 'require', '标题必需'),
		array('tag', 'require', '标签必需')
	);
	protected $_auto = array (
		array('create_time', 'time', 1, 'function')
	);
}