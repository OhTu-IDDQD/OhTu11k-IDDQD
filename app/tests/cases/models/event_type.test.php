<?php
/* EventType Test cases generated on: 2011-03-29 21:00:30 : 1301421630*/
App::import('Model', 'EventType');

class EventTypeTestCase extends CakeTestCase {
	var $fixtures = array('app.event_type', 'app.course_event', 'app.course', 'app.event', 'app.user', 'app.training_question', 'app.training_answer');

	function startTest() {
		$this->EventType =& ClassRegistry::init('EventType');
	}

	function endTest() {
		unset($this->EventType);
		ClassRegistry::flush();
	}

}
?>