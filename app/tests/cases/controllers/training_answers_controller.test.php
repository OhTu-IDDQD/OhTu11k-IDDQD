<?php
/* TrainingAnswers Test cases generated on: 2011-03-31 14:19:14 : 1301570354*/
App::import('Controller', 'TrainingAnswers');

class TestTrainingAnswersController extends TrainingAnswersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TrainingAnswersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.training_answer', 'app.training_question', 'app.course', 'app.course_event', 'app.event_type', 'app.event', 'app.user', 'app.user_course');

	function startTest() {
		$this->TrainingAnswers =& new TestTrainingAnswersController();
		$this->TrainingAnswers->constructClasses();
	}

	function endTest() {
		unset($this->TrainingAnswers);
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