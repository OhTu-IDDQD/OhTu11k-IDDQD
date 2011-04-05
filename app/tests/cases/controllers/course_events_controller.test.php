<?php
/* CourseEvents Test cases generated on: 2011-03-31 14:17:37 : 1301570257*/
App::import('Controller', 'CourseEvents');

class TestCourseEventsController extends CourseEventsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CourseEventsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.course_event', 'app.course', 'app.event', 'app.user', 'app.user_course', 'app.training_question', 'app.training_answer', 'app.event_type');

	function startTest() {
		$this->CourseEvents =& new TestCourseEventsController();
		$this->CourseEvents->constructClasses();
	}

	function endTest() {
		unset($this->CourseEvents);
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