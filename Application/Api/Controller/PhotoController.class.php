<?php
namespace Api\Controller;
use Think\Controller;

class PhotoController extends \Api\Controller\ModelBasedController {

	var $modelName = "Photo";

	public function getByGalleryAction() {
		$gallary_id = intval(I('get.gallary_id', '-1'));
		$Photo = D('Photo');
		$photos_cnt = $Photo->where(array('gallary_id'=>$gallary_id))->count();
		$photos = $Photo->where(array('gallary_id'=>$gallary_id))->order('create_time desc')->select();
		if ($photos) {
			echo json_encode($photos);
		} elseif ($photos_cnt == 0) {
			echo json_encode(array());
		} else {
			httpError(500, "Database failed");
		}
	}

	public function deleteAction() {
		if (!canDelete()) {
			httpError(403, "Not authorized");
			return;
		}
		$Photo = D('Photo');
		$photoId = intval(I('get.id', '-1'));
		$thePhoto = $Photo->find($photoId);
		$result = $Photo->delete($photoId);
		if ($result) {
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
			if ($fileError) {
				// $return_obj->msg = $fileError->getMessage();
				// $return_obj->status = 1;
			} else {
				// $return_obj->msg = "";
				// $return_obj->status = 0;
			}
		} else {
			// $return_obj->msg = $Photo->getError();
			// $return_obj->status = 2;
			httpError(500, $Photo->getError() ? $Photo->getError() : "Database failed");
		}
	}

	public function uploadPhotosAction() {
		if (!canPut()) {
			httpError(403, "Not authorized");
			return;
		}
		$id = intval(I('get.gallary_id', '-1'));
		$Gallary = D('Gallary');
		$gallary = $Gallary->find($id);

		$return_obj = "";
		$return_obj->msg = "";
		$return_obj->status = 0;

		if (!$gallary) {
			$msg = "相册不存在";
			httpError(500, $msg);
		} else {
			$upload = new \Think\Upload();
			$upload->maxSize = 10485760;
			$upload->exts = array('jpg', 'gif', 'png', 'jpeg', 'bmp');
			$upload->rootPath = C('DEFAULT_UPLOADS_ROOT');
			$upload->savePath = './Photos/';
			$info = $upload->upload();
			if (!$info) {
				httpError(500, $Photo->getError() ? $upload->getError() : "File uploading failed");
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
						httpError(500, $Photo->getError() ? $Photo->getError() : "Database failed");
					}
				}
			}
		}
	}
}

?>