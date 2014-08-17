<?php
namespace Home\Controller;
use Think\Controller;
class ResumeController extends Controller {

	public function indexAction() {
		$this->assign('closeFanNav',true);

		$this->assign('page_info',array('title'=>'简历'));
		// $this->assign('page_flag',array('title'=>'相&nbsp;&nbsp;&nbsp;册', 'subtitle'=>''));

		$this->display();
	}
}