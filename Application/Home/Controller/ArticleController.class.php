<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller {

	public function indexAction() {
		$page = intval(I('get.page', '1'));
		$amount = intval(I('get.pn', '5'));
		$begin = intval(I('get.ps', ($page-1)*$amount));
		$Article = D('Article');
		$list = $Article->order('create_time desc')->limit($begin, $amount)->select();
		$count = $Article->count();
		$totolPage = ceil($count/$amount);
		$this->assign('list',$list);
		$this->assign('page',$page);
		$this->assign('pn',$amount);
		$this->assign('ps',$begin);
		$this->assign('pt',$totolPage);
		$this->assign('page_info',array('title'=>'文章'));
		$this->assign('page_flag',array('title'=>'文&nbsp;&nbsp;&nbsp;章', 'subtitle'=>'第&nbsp;'.$page.'&nbsp;页'));
		$this->display();
	}

	public function viewAction() {
		$id = intval(I('get.id', '0'));
		$Article = D('Article');
		$a = $Article->find($id);
		$this->assign('article',$a);
		$this->assign('page_info',array('title'=>$a['title'].' - 文章'));
		$this->display();
	}

	public function fuckAction() {
		echo "fuck";
	}
}