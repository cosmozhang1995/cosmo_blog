<?php
namespace Api\Controller;
use Think\Controller;

class NewbiesController extends Controller {

	function newbiesAction() {
		jsonFetchAction("/data/newbies/newbies.json");
	}
}