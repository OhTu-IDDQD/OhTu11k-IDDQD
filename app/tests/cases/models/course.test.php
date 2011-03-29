<?php
/* Course Test cases generated on: 2011-03-29 20:09:52 : 1301418592*/
App::import('Model', 'Course');

class CourseTestCase extends CakeTestCase {
	var $fixtures = array('app.course', 'app.course_event', 'app.event', 'app.user', 'app.training_question', 'app.training_answer');

	function startTest() {
		$this->Course =& ClassRegistry::init('Course');
	}

	function endTest() {
		unset($this->Course);
		ClassRegistry::flush();
	}

}
?>