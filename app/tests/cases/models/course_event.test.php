<?php
/* CourseEvent Test cases generated on: 2011-03-31 12:45:57 : 1301564757*/
App::import('Model', 'CourseEvent');

class CourseEventTestCase extends CakeTestCase {
	var $fixtures = array('app.course_event', 'app.course', 'app.event', 'app.user', 'app.user_course', 'app.training_question', 'app.training_answer', 'app.event_type');

	function startTest() {
		$this->CourseEvent =& ClassRegistry::init('CourseEvent');
	}

	function endTest() {
		unset($this->CourseEvent);
		ClassRegistry::flush();
	}

	function testEventsByDay() {

	}

}
?>