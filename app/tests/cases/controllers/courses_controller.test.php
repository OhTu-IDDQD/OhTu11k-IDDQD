<?php
/* Courses Test cases generated on: 2011-03-25 12:14:12 : 1301048052*/
App::import('Controller', 'Courses');

class TestCoursesController extends CoursesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CoursesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.course', 'app.event', 'app.user', 'app.user_event', 'app.training_question', 'app.training_answer');

	function startTest() {
		$this->Courses =& new TestCoursesController();
		$this->Courses->constructClasses();
	}

	function endTest() {
		unset($this->Courses);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>