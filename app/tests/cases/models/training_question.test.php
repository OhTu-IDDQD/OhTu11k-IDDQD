<?php
/* TrainingQuestion Test cases generated on: 2011-03-25 12:13:18 : 1301047998*/
App::import('Model', 'TrainingQuestion');

class TrainingQuestionTestCase extends CakeTestCase {
	var $fixtures = array('app.training_question', 'app.course', 'app.event', 'app.user', 'app.user_event', 'app.training_answer');

	function startTest() {
		$this->TrainingQuestion =& ClassRegistry::init('TrainingQuestion');
	}

	function endTest() {
		unset($this->TrainingQuestion);
		ClassRegistry::flush();
	}

}
?>