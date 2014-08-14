<?php
namespace Home\Controller;
use Think\Controller;
class ResumeController extends Controller {

	public function indexAction() {
		$this->assign('closeFanNav',true);

		$this->display();
	}
}