<?php
/* UserCourse Test cases generated on: 2011-03-30 09:39:24 : 1301467164*/
App::import('Model', 'UserCourse');

class UserCourseTestCase extends CakeTestCase {
	var $fixtures = array('app.user_course', 'app.user', 'app.event', 'app.course', 'app.course_event', 'app.event_type', 'app.training_question', 'app.training_answer');

	function startTest() {
		$this->UserCourse =& ClassRegistry::init('UserCourse');
	}

	function endTest() {
		unset($this->UserCourse);
		ClassRegistry::flush();
	}

}
?>