<?php
/* TrainingAnswer Test cases generated on: 2011-03-25 12:13:57 : 1301048037*/
App::import('Model', 'TrainingAnswer');

class TrainingAnswerTestCase extends CakeTestCase {
	var $fixtures = array('app.training_answer', 'app.training_question', 'app.course', 'app.event', 'app.user', 'app.user_event');

	function startTest() {
		$this->TrainingAnswer =& ClassRegistry::init('TrainingAnswer');
	}

	function endTest() {
		unset($this->TrainingAnswer);
		ClassRegistry::flush();
	}

}
?>