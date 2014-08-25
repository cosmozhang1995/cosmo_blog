<?php
namespace Api\Controller;
use Think\Controller;

class ResumeController extends Controller {

	function skillsAction() {
		jsonFetchAction("/data/resume/skills.json");
	}

	function educationAction() {
		jsonFetchAction("/data/resume/education.json");
	}

	function careerAction() {
		jsonFetchAction("/data/resume/career.json");
	}

	function projectsAction() {
		jsonFetchAction("/data/resume/projects.json");
	}
}