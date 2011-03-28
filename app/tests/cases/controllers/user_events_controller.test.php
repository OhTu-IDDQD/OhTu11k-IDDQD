<?php
/* UserEvents Test cases generated on: 2011-03-25 12:15:01 : 1301048101*/
App::import('Controller', 'UserEvents');

class TestUserEventsController extends UserEventsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UserEventsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.user_event', 'app.event', 'app.course', 'app.training_question', 'app.training_answer', 'app.user');

	function startTest() {
		$this->UserEvents =& new TestUserEventsController();
		$this->UserEvents->constructClasses();
	}

	function endTest() {
		unset($this->UserEvents);
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