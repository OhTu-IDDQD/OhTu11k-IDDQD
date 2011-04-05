<?php
/* UserCourses Test cases generated on: 2011-03-31 14:18:59 : 1301570339*/
App::import('Controller', 'UserCourses');

class TestUserCoursesController extends UserCoursesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UserCoursesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.user_course', 'app.user', 'app.event', 'app.course', 'app.course_event', 'app.event_type', 'app.training_question', 'app.training_answer');

	function startTest() {
		$this->UserCourses =& new TestUserCoursesController();
		$this->UserCourses->constructClasses();
	}

	function endTest() {
		unset($this->UserCourses);
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