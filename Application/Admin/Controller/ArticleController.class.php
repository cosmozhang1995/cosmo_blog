<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends Controller {
	public function indexAction() {
		$this->redirect('list');
	}

	public function listAction() {
		// if (!APP_ADMIN) {
		// 	httpError(403, 'Not authorized');
		// 	return;
		// }
		$page = intval(I('get.page', '1'));
		$amount = intval(I('get.pn', '10'));
		$begin = intval(I('get.ps', ($page-1)*$amount));
		$Article = D('Article');
		$list = $Article->order('create_time desc')->limit($begin, $amount)->select();
		$this->assign('list',$list);

		// Handle result message
		$message = null;
		$msg_isset = I('get.msg', null);
		if (isset($msg_isset)) {
			$message = array(
				'msg' => I('get.msg'),
				'status' => I('get.status')
			);
		}
		$this->assign('msg',$msg);
		$this->assign('message',$message);
		$this->assign('page',$page);
		$this->assign('pn',$amount);
		$this->assign('ps',$begin);

		$this->assign('controller', 'article');
		$this->display();
	}

	public function editAction() {
		// if (!APP_ADMIN) {
		// 	httpError(403, 'Not authorized');
		// 	return;
		// }
		$id = intval(I('get.id', '-1'));
		$isnew = !($id >= 0);
		$result = null;
		if (!$isnew) {
			$Article = D('Article');
			$result = $Article->find($id);
			if (!$result) $isnew = true;
		}
		$this->assign('isnew',$isnew);
		$this->assign('article',$result);
		$this->assign('tags',getTags('Article'));
		$this->assign('controller', 'article');
		$this->display('edit');
	}

	public function updateAction() {
		// if (!APP_ADMIN) {
		// 	httpError(403, 'Not authorized');
		// 	return;
		// }
		$Article = D('Article');
		$result = $Article->create();
		if ($result) $Article->save();
		$msg = $result ? "更新成功" : "更新失败";
		$this->redirect('Article/list',
			array(
				'msg'=>$msg,
				'status'=>$result ? 0 : 2
			),
			0,$msg
		);
	}

	public function createAction() {
		// if (!APP_ADMIN) {
		// 	httpError(403, 'Not authorized');
		// 	return;
		// }
		$Article = D('Article');
		$result = $Article->create();
		if ($result) $Article->add();
		$msg = $result ? "添加成功" : "添加失败";
		$this->redirect('Article/list',
			array(
				'msg'=>$msg,
				'status'=>$result ? 0 : 2
			),
			0,$msg
		);
	}

	public function deleteAction() {
		// if (!APP_ADMIN) {
		// 	httpError(403, 'Not authorized');
		// 	return;
		// }
		$id = intval(I('get.id', '-1'));
		$Article = D('Article');
		$result = $Article->delete($id);
		$msg = $result ? "删除成功" : "删除失败";
		$this->redirect('Article/list',
			array(
				'msg'=>$msg,
				'status'=>$result ? 0 : 2
			),
			0,$msg
		);
	}
}