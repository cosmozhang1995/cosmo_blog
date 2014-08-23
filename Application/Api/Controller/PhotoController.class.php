<?php
namespace Api\Controller;
use Think\Controller;
use Think\Model;

class PhotoController extends \Api\Controller\CommonController {

	public function getAction() {
		$gallary_id = intval(I('get.gallary_id', '-1'));
		$photo_id = intval(I('get.id', '-1'));
		$Photo = D('Photo');
		if ($gallary_id >= 0) {
			$photos_cnt = $Photo->where(array('gallary_id'=>$gallary_id))->count();
			$photos = $Photo->where(array('gallary_id'=>$gallary_id))->order('create_time desc')->select();
			if ($photos) {
				echo json_encode($photos);
			} elseif ($photos_cnt == 0) {
				echo json_encode(array());
			} else {
				httpError(500, "Database failed");
			}
		} else if ($photo_id >= 0) {
			$photo = $Photo->find($photo_id);
			if ($photo) {
				echo json_encode($photos);
			} elseif ($photos_cnt == 0) {
				httpError(500, "Not found");
			} else {
				httpError(500, "Database failed");
			}
		} else {
			$photos_cnt = $Photo->count();
			$photos = $Photo->order('create_time desc')->select();
			if ($photos) {
				echo json_encode($photos);
			} elseif ($photos_cnt == 0) {
				echo json_encode(array());
			} else {
				httpError(500, "Database failed");
			}
		}
	}

	public function postAction() {
		$validFields = array('title', 'description', 'gallary_id', 'url');
		$inputData = get_object_vars(json_decode($this->getRawData()));
		$outputData = array();
		foreach ($validFields as $fieldName) {
			if ($inputData[$fieldName]) $outputData[$fieldName] = $inputData[$fieldName];
		}
		$Photo = D('Photo');
		$result = $Photo->create($outputData);
		if ($result) {
			$Photo->add();
		} else {
			httpError(500, $Photo->getError() ? $Photo->getError() : "Database failed");
		}
	}

	public function putAction() {
		$validFields = array('id', 'title', 'description', 'gallary_id', 'url');
		$inputData = get_object_vars(json_decode($this->getRawData()));
		$outputData = array();
		foreach ($validFields as $fieldName) {
			if ($inputData[$fieldName]) $outputData[$fieldName] = $inputData[$fieldName];
		}
		$Photo = D('Photo');
		$result = $Photo->create($outputData);
		if ($result) {
			$Photo->save();
		} else {
			httpError(500, $Photo->getError() ? $Photo->getError() : "Database failed");
		}
	}

	public function deleteAction() {
		$photoId = intval(I('get.id', '-1'));
		$Photo = D('Photo');
		$result = $Photo->delete($photoId);
		if ($result) {
		} else {
			httpError(500, $Photo->getError() ? $Photo->getError() : "Database failed");
		}
	}

	public function testAction() {
		echo $this->getRawData();
	}
}

?>