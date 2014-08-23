<?php
namespace Api\Controller;
use Think\Controller;

class CommonController extends Controller {

	var $rawData = null;

	function indexAction() {
		$this->rawData = file_get_contents('php://input');
		if (IS_POST) {
			$this->postAction();
		} elseif (IS_PUT) {
			$this->putAction();
		} elseif (IS_DELETE) {
			$this->deleteAction();
		} elseif (IS_HEAD) {
			$this->headAction();
		} elseif (IS_AJAX) {
			$this->ajaxAction();
		} else {
			$this->getAction();
		}
	}

	function defaultAction() {
		httpError(400, "Unsupported request method");
	}

	function getAction() {
		$this->defaultAction();
	}

	function postAction() {
		$this->defaultAction();
	}

	function putAction() {
		$this->defaultAction();
	}

	function deleteAction() {
		$this->defaultAction();
	}

	function headAction() {
		$this->defaultAction();
	}

	function ajaxAction() {
		$this->defaultAction();
	}

	function getRawData() {
		// $returnData = I('globals.HTTP_RAW_POST_DATA', "");
		// $returnData = htmlspecialchars_decode($returnData);
		// $returnData = file_get_contents('php://input');
		$returnData = $this->rawData;
		parse_str($returnData);
		return $returnData;
	}
}