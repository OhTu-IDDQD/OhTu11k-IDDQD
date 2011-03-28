<?php
/* Event Test cases generated on: 2011-03-25 12:12:12 : 1301047932*/
App::import('Model', 'Event');

class EventTestCase extends CakeTestCase {
	var $fixtures = array('app.event', 'app.course', 'app.training_question', 'app.user', 'app.user_event');

	function startTest() {
		$this->Event =& ClassRegistry::init('Event');
	}

	function endTest() {
		unset($this->Event);
		ClassRegistry::flush();
	}

}
?>