<?php
/* TrainingQuestions Test cases generated on: 2011-03-31 14:19:06 : 1301570346*/
App::import('Controller', 'TrainingQuestions');

class TestTrainingQuestionsController extends TrainingQuestionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TrainingQuestionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.training_question', 'app.course', 'app.course_event', 'app.event_type', 'app.event', 'app.user', 'app.user_course', 'app.training_answer');

	function startTest() {
		$this->TrainingQuestions =& new TestTrainingQuestionsController();
		$this->TrainingQuestions->constructClasses();
	}

	function endTest() {
		unset($this->TrainingQuestions);
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