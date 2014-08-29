<?php
namespace Home\Controller;
use Think\Controller;
class NewbiesController extends Controller {

	public function indexAction() {
		$this->assign('closeFanNav',false);

		$this->assign('page_info',array('title'=>'玩意'));
		$this->assign('page_flag',array('title'=>'玩&nbsp;&nbsp;&nbsp;意', 'subtitle'=>'神一般的存在'));

		$this->display();
	}
}