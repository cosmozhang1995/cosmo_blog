<?php
namespace Api\Controller;
use Think\Controller;

class ModelBasedController extends \Api\Controller\CommonController {

	var $modelName = "";			// Need to be overloaded

	public function __construct($modelName) {
		parent::__construct();
		if (is_string($modelName)) $this->modelName = $modelName;
	}

	public function getModel() {
		return D($this->modelName);
	}

	public function globalFields() {
		$Model = $this->getModel();
		return $Model->getDbFields();
	}

	public function getFields() {
		$fields = $this->globalFields();
		$cnt = array_remove('create_time', $fields);
		return $fields;
	}

	public function postFields() {
		$fields = $this->globalFields();
		$Model = $this->getModel();
		array_remove($Model->getPk(), $fields);
		array_remove('create_time', $fields);
		return $fields;
	}

	public function putFields() {
		$fields = $this->globalFields();
		array_remove('create_time', $fields);
		return $fields;
	}

	public function pk() {
		return $this->getModel()->getPk();
	}

	public function hasCreateTime() {
		$allFields = $this->getModel()->getDbFields();
		if (in_array('create_time', $allFields)) return true;
		return false;
	}

	public function filterFields($entity, $fields, $batch) {
		$filterSingle = function (&$_entity, $_fields) {
			foreach ($_entity as $key => $value) {
				if (!in_array($key, $_fields)) {
					unset($_entity[$key]);
				}
			}
		};
		if ($batch) {
			foreach ($entity as $key => $value) {
				$filterSingle($value, $fields);
			}
		} else {
			$filterSingle($entity, $fields);
		}
		return $entity;
	}

	public function canGet() {
		return true;
	}
	public function canPost() {
		return isAdmin();
	}
	public function canPut() {
		return isAdmin();
	}
	public function canDelete() {
		return isAdmin();
	}

	public function getAction() {
		if (!$this->canGet()) {
			httpError(403, "Not authorized");
			return;
		}
		$Model = $this->getModel();
		$id = intval(I('get.id', '-1'));
		if ($id >= 0) {
			$entity = $Model->find($id);
			if ($entity) {
				echo json_encode($this->filterFields($entity, $this->getFields(), false));
			} elseif ($photos_cnt == 0) {
				httpError(404, "Record not found");
			} else {
				httpError(500, "Database failed");
			}
		} else {
			$entities_cnt = $Model->count();
			if ($this->hasCreateTime()) $entities = $Model->order('create_time desc')->select();
			else $entities = $Model->order(($this->pk()).' desc')->select();
			if ($entities) {
				echo json_encode($this->filterFields($entities, $this->getFields(), true));
			} elseif ($entities_cnt == 0) {
				echo json_encode(array());
			} else {
				httpError(500, "Database failed");
			}
		}
	}

	public function postAction() {
		if (!$this->canPost()) {
			httpError(403, "Not authorized");
			return;
		}
		$inputData = get_object_vars(json_decode($this->getRawData()));
		$outputData = array();
		foreach ($this->postFields() as $fieldName) {
			if ($inputData[$fieldName]) $outputData[$fieldName] = $inputData[$fieldName];
		}
		$Model = $this->getModel();
		$result = $Model->create($outputData);
		if ($result) {
			$Model->add();
		} else {
			httpError(500, $Model->getError() ? $Model->getError() : "Database failed");
		}
	}

	public function putAction() {
		if (!$this->canPut()) {
			httpError(403, "Not authorized");
			return;
		}
		$inputData = get_object_vars(json_decode($this->getRawData()));
		$outputData = array();
		foreach ($this->putFields() as $fieldName) {
			if ($inputData[$fieldName]) $outputData[$fieldName] = $inputData[$fieldName];
		}
		$Model = $this->getModel();
		$result = $Model->create($outputData);
		if ($result) {
			$Model->save();
		} else {
			httpError(500, $Model->getError() ? $Model->getError() : "Database failed");
		}
	}

	public function deleteAction() {
		if (!$this->canPost()) {
			httpError(403, "Not authorized");
			return;
		}
		$id = intval(I('get.id', '-1'));
		$Model = $this->getModel();
		$result = $Model->delete($id);
		if ($result) {
		} else {
			httpError(500, $Model->getError() ? $Model->getError() : "Database failed");
		}
	}
}

?>