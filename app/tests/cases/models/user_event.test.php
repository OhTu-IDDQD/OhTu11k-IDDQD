<?php
/* UserEvent Test cases generated on: 2011-03-25 12:46:53 : 1301050013*/
App::import('Model', 'UserEvent');

class UserEventTestCase extends CakeTestCase {
	var $fixtures = array('app.user_event', 'app.event', 'app.course', 'app.training_question', 'app.training_answer', 'app.user');

	function startTest() {
		$this->UserEvent =& ClassRegistry::init('UserEvent');
	}

	function endTest() {
		unset($this->UserEvent);
		ClassRegistry::flush();
	}

}
?>