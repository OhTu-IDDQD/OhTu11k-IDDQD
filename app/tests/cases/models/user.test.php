<?php
/* User Test cases generated on: 2011-03-31 14:26:14 : 1301570774*/
App::import('Model', 'User');

class UserTestCase extends CakeTestCase {
	var $fixtures = array('app.user', 'app.event', 'app.course', 'app.course_event', 'app.event_type', 'app.training_question', 'app.training_answer', 'app.user_course');

	function startTest() {
		$this->User =& ClassRegistry::init('User');
	}

	function endTest() {
		unset($this->User);
		ClassRegistry::flush();
	}

}
?>