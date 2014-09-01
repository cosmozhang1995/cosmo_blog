<?php
namespace Api\Controller;
use Think\Controller;

class ArticleController extends \Api\Controller\ModelBasedController {
	var $modelName = "Article";

	getByPage() {
		$page_size = intval(I('get.ps', 5));
		$page = intval(I('get.pg', 1));
		$begin = ($page - 1) * $page_size;
		$amount = $page_size;
		$Article = D('Article');
		$list = $Article->order('create_time desc')->limit($begin, $amount)->select();
		if ($list) {
			if (count($list) == 0) {
				httpError(302, Records not found);
			} else {
				echo json_encode($this->filterFields($list, $this->getFields(), true));
			}
		} else {
			httpError(500, Database error);
		}
	}
}