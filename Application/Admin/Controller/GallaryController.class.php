<?php
namespace Admin\Controller;
use Think\Controller;
class GallaryController extends Controller {
	public function indexAction() {
		$this->redirect('list');
	}

	public function listAction() {
		$page = intval(I('get.page', '1'));
		$amount = intval(I('get.pn', '10'));
		$begin = intval(I('get.ps', ($page-1)*$amount));
		$Gallary = D('Gallary');
		$list = $Gallary->order('create_time desc')->limit($begin, $amount)->select();
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

		$this->display();
	}

	public function editAction() {
		$id = intval(I('get.id', '-1'));
		$isnew = !($id >= 0);
		$result = null;
		if (!$isnew) {
			$Gallary = D('Gallary');
			$result = $Gallary->find($id);
			if (!$result) $isnew = true;
		}
		$this->assign('isnew',$isnew);
		$this->assign('gallary',$result);
		$this->assign('tags',getTags("Gallary"));
		$this->display('edit');
	}

	public function updateAction() {
		$Gallary = D('Gallary');
		$result = $Gallary->create();
		if ($result) $Gallary->save();
		$msg = $result ? "更新成功" : "更新失败:".($Gallary->getError());
		$this->redirect('Gallary/list',
			array(
				'msg'=>$msg,
				'status'=>$result ? 0 : 2
			),
			0,$msg
		);
	}

	public function createAction() {
		$Gallary = D('Gallary');
		$result = $Gallary->create();
		if ($result) $Gallary->add();
		$msg = $result ? "添加成功" : "添加失败:".($Gallary->getError());
		$this->redirect('Gallary/list',
			array(
				'msg'=>$msg,
				'status'=>$result ? 0 : 2
			),
			0,$msg
		);
	}

	public function deleteAction() {
		$id = intval(I('get.id', '-1'));
		$Gallary = D('Gallary');
		$result = $Gallary->delete($id);
		$msg = $result ? "删除成功" : "删除失败";
		$this->redirect('Gallary/list',
			array(
				'msg'=>$msg,
				'status'=>$result ? 0 : 2
			),
			0,$msg
		);
	}

	public function updateHandlerAction() {
		$Gallary = D('Gallary');
		$result = $Gallary->create();
		if ($result) $Gallary->save();
		$msg = $result ? "" : $Gallary->getError();
		echo json_encode(
			array(
				'msg'=>$msg,
				'status'=>$result ? 0 : 2
			)
		);
	}

	public function adminPhotosAction() {
		$id = intval(I('get.id', '-1'));
		$Gallary = D('Gallary');
		$gallary = $Gallary->find($id);
		$Photo = D('Photo');
		$photos = $Photo->where(array('gallary_id'=>$id))->order('create_time desc')->select();

		$this->assign('gallary',$gallary);
		$this->assign('photos',$photos);

		$this->display();
	}

	public function uploadPhotosAction() {
		$id = intval(I('get.id', '-1'));
		$Gallary = D('Gallary');
		$gallary = $Gallary->find($id);

		$this->assign('gallary',$gallary);

		$this->display();
	}

	public function uploadPhotosHandlerAction() {
		$id = intval(I('get.id', '-1'));
		$Gallary = D('Gallary');
		$gallary = $Gallary->find($id);

		$return_obj = "";
		$return_obj->msg = "";
		$return_obj->status = 0;

		if (!$gallary) {
			$msg = "相册不存在";
			$return_obj->msg = $msg;
			$return_obj->status = 2;
			// return 0;
		} else {
			$upload = new \Think\Upload();
			$upload->maxSize = 10485760;
			$upload->exts = array('jpg', 'gif', 'png', 'jpeg', 'bmp');
			$upload->rootPath = C('DEFAULT_UPLOADS_ROOT');
			$upload->savePath = './Photos/';
			$info = $upload->upload();
			if (!$info) {
				$return_obj->msg = $upload->getError();
				$return_obj->status = 2;
			} else {
				$Photo = D('Photo');
				$titles = I('post.title');
				$descriptions = I('post.description');
				for ($i = 0; $i < count($info); $i++) {
					$create_obj = Array();
					$create_obj['title'] = $titles[$i];
					$create_obj['description'] = $descriptions[$i];
					$create_obj['gallary_id'] = $gallary['id'];
					$create_obj['url'] = __ROOT__.'/'.C('DEFAULT_UPLOADS_URL').$info[$i]['savepath'].$info[$i]['savename'];
					$result = $Photo->create($create_obj);
					if ($result) {
						$Photo->add();
					} else {
						$return_obj->msg = $Photo->getError();
						$return_obj->status = 2;
						break;
					}
				}
			}
		}

		echo json_encode($return_obj);
	}

	public function updatePhotoHandlerAction() {
		$Photo = D('Photo');
		$result = $Photo->create();
		if ($result) {
			$Photo->save();
			$return_obj->msg = "";
			$return_obj->status = 0;
		} else {
			$return_obj->msg = $Photo->getError();
			$return_obj->status = 2;
		}
		echo json_encode($return_obj);
	}

	public function deletePhotoHandlerAction() {
		$Photo = D('Photo');
		$thePhoto = $Photo->find(intval(I('post.id', '-1')));
		$result = $Photo->where(array('id'=>intval(I('post.id', '-1'))))->delete();
		if ($result && $thePhoto) {
			if (stripos($thePhoto['url'], '://') === false) {
				// Not a remote resource
				$theUrl = $thePhoto['url'];
				if (!(stripos($theUrl, __ROOT__) === false)) {
					$theUrl = substr($theUrl, stripos($theUrl, __ROOT__) + strlen(__ROOT__));
				}
				while (substr($theUrl, 0, 1) == '/') {
					$theUrl = substr($theUrl, 1);
				}
				try {
					\My\FileUtil::connect(STORAGE_TYPE);
					\My\FileUtil::unlinkFile($theUrl);
				} catch (Exception $e) {
					$fileError = $e;
				}
			} elseif (stripos($thePhoto['url'], 'stor.sinaapp.com') > 0) {
				try {
					\My\FileUtil::connect(STORAGE_TYPE);
					\My\FileUtil::unlinkFile($thePhoto['url']);
				} catch (Exception $e) {
					$fileError = $e;
				}
			}
			$Photo->save();
			if ($fileError) {
				$return_obj->msg = $fileError->getMessage();
				$return_obj->status = 1;
			} else {
				$return_obj->msg = "";
				$return_obj->status = 0;
			}
		} else {
			$return_obj->msg = $Photo->getError();
			$return_obj->status = 2;
		}
		echo json_encode($return_obj);
	}

}