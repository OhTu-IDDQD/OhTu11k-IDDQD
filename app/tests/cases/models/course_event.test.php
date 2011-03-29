<?php
/* CourseEvent Test cases generated on: 2011-03-29 20:13:00 : 1301418780*/
App::import('Model', 'CourseEvent');

class CourseEventTestCase extends CakeTestCase {
	var $fixtures = array('app.course_event', 'app.course', 'app.event', 'app.user', 'app.training_question', 'app.training_answer', 'app.event_type');

	function startTest() {
		$this->CourseEvent =& ClassRegistry::init('CourseEvent');
	}

	function endTest() {
		unset($this->CourseEvent);
		ClassRegistry::flush();
	}

}
?>