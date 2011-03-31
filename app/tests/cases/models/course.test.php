<?php
/* Course Test cases generated on: 2011-03-31 14:22:29 : 1301570549*/
App::import('Model', 'Course');

class CourseTestCase extends CakeTestCase {
	var $fixtures = array('app.course', 'app.course_event', 'app.event_type', 'app.event', 'app.user', 'app.user_course', 'app.training_question', 'app.training_answer');

	function startTest() {
		$this->Course =& ClassRegistry::init('Course');
	}

	function endTest() {
		unset($this->Course);
		ClassRegistry::flush();
	}

	function testGetCoursesDatum() {

	}

	function testGetEvent() {
		$count = $this->Course->Event->find('count', array('conditions' => array('course_id' => 1)));
		$this->assertEqual($count,1);
	}

}
?>
