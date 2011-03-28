<?php
/* Course Test cases generated on: 2011-03-25 12:46:24 : 1301049984*/
App::import('Model', 'Course');

class CourseTestCase extends CakeTestCase {
	var $fixtures = array('app.course', 'app.event', 'app.user', 'app.user_event', 'app.training_question', 'app.training_answer');

	function startTest() {
		$this->Course =& ClassRegistry::init('Course');
	}

	function endTest() {
		unset($this->Course);
		ClassRegistry::flush();
	}

}
?>