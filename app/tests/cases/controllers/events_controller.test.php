<?php
/* Events Test cases generated on: 2011-03-25 12:14:23 : 1301048063*/
App::import('Controller', 'Events');

class TestEventsController extends EventsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EventsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.event', 'app.course', 'app.training_question', 'app.training_answer', 'app.user', 'app.user_event');

	function startTest() {
		$this->Events =& new TestEventsController();
		$this->Events->constructClasses();
	}

	function endTest() {
		unset($this->Events);
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