<?php
namespace Home\Controller;
use Think\Controller;
class GallaryController extends Controller {

	public function indexAction() {
		// $page = intval(I('get.page', '1'));
		// $amount = intval(I('get.pn', '5'));
		// $begin = intval(I('get.ps', ($page-1)*$amount));
		// $Article = D('Article');
		// $list = $Article->order('create_time desc')->limit($begin, $amount)->select();
		// $count = $Article->count();
		// $totolPage = ceil($count/$amount);
		// $this->assign('list',$list);
		// $this->assign('page',$page);
		// $this->assign('pn',$amount);
		// $this->assign('ps',$begin);
		// $this->assign('pt',$totolPage);

		$Gallary = D('Gallary');
		$gallaries = $Gallary->select();
		$gallariesInTags = array();

		$Photo = D('Photo');

		foreach ($gallaries as $key => $value) {
			$theTag = $value['tag'];
			if (!isset($gallariesInTags[$theTag])) {
				$gallariesInTags[$theTag] = array('tag'=>$theTag, 'gallaries'=>array());
			}
			$cover = $Photo->find($value['cover_photo_id']);
			if ($cover) $value['cover_url'] = $cover['url'];
			else $value['cover_url'] = C('TMPL_PARSE_STRING')['__IMG_RES__'].'/default_150_170.png';
			array_push($gallariesInTags[$theTag]['gallaries'], $value);
		}

		$this->assign('gallaries',$gallariesInTags);

		$this->assign('page_info',array('title'=>'相册'));
		$this->assign('page_flag',array('title'=>'相&nbsp;&nbsp;&nbsp;册', 'subtitle'=>''));
		
		$this->display();
	}

	public function viewAction() {
		$id = intval(I('get.id', '0'));
		$Gallary = D('Gallary');
		$g = $Gallary->find($id);

		$this->assign('gallary',$g);

		$this->assign('page_info',array('title'=>$g['title'].' - 相册'));
		$this->assign('page_flag',array('title'=>'相&nbsp;&nbsp;&nbsp;册', 'subtitle'=>$g['title']));

		$this->display();
	}

	public function photosApiAction() {
		$id = intval(I('get.id', '-1'));
		$Photo = D('Photo');
		$photos_cnt = $Photo->where(array('gallary_id'=>$id))->count();
		$photos = $Photo->where(array('gallary_id'=>$id))->order('create_time desc')->select();
		if ($photos) {
			echo json_encode($photos);
		} elseif ($photos_cnt == 0) {
			echo json_encode(array());
		} else {
			throw_exception("Database failed");
		}
	}

	public function fuckAction() {
		echo "fuck";
	}
}