<?php
class CoursesController extends AppController {

	var $name = 'Courses';

	function index() {
		$this->Course->recursive = 0;
		$this->set('courses', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid course', true));
			$this->redirect(array('action' => 'index'));
		}

		$lectures = $this->Course->CourseEvent->find(
			'all', array(
				'conditions' => array(
					'CourseEvent.course_id' => $id, 
					'CourseEvent.event_type_id' => 1
				), 
				'order' => 'CourseEvent.day'
			)
		);

		$exercise_groups = $this->Course->CourseEvent->find(
			'all', array(
				'conditions' => array(
					'CourseEvent.course_id' => $id, 
					'CourseEvent.event_type_id' => 2
				), 
				'order' => 'CourseEvent.day'
			)
		);

		$this->set('lectures', $lectures);
		$this->set('exercise_groups', $exercise_groups);
		$this->set('course', $this->Course->read(null, $id));
	}

	function add() {
		$new_courses = $this->Course->getCoursesData();
		
		if ( $new_courses > 0 ) {
			$this->Session->setFlash(__('New courses have been added', true));
		}
		else {
			$this->Session->setFlash(__('No new courses found', true));
		}
	
		$this->redirect(
			array(
				'plugin' => false, 
				'controller' => 'courses', 
				'action' => 'index'
			)
		);

	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid course', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Course->save($this->data)) {
				$this->Session->setFlash(__('The course has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Course->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for course', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Course->delete($id)) {
			$this->Session->setFlash(__('Course deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Course was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
