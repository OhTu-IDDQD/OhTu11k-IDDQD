<?php
/* Courses Test cases generated on: 2011-03-31 14:17:59 : 1301570279*/
App::import('Controller', 'Courses');

class TestCoursesController extends CoursesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CoursesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.course', 'app.course_event', 'app.event_type', 'app.event', 'app.user', 'app.user_course', 'app.training_question', 'app.training_answer');

	function startTest() {
		$this->Courses =& new TestCoursesController();
		$this->Courses->constructClasses();
	}

	function endTest() {
		unset($this->Courses);
		ClassRegistry::flush();
	}

	function testIndex() {
		
	}


function testIndexShortGetRenderedHtml() {
	$result = $this->testAction('/courses/index/short',array('return' => 'render'));
	$this->assertEqual($result,true);
 }

function testIndexShortGetViewVars() {
	$result = $this->testAction('/courses/index/short', array('return' => 'vars'));

	$x = 0;
	foreach($result['courses'] as $course) {
		if ( $course['Course']['id'] == 1 ) $x++;
	}
	$this->assertEqual($x, 1);
}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>
