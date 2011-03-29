<?php
class CourseEventsController extends AppController {

	var $name = 'CourseEvents';

	function index() {
		$this->CourseEvent->recursive = 0;
		$this->set('courseEvents', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid course event', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('courseEvent', $this->CourseEvent->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->CourseEvent->create();
			if ($this->CourseEvent->save($this->data)) {
				$this->Session->setFlash(__('The course event has been saved', true));
				$this->redirect(array('plugin' => false, 'controller' => 'courses', 'action' => 'view', $this->data['CourseEvent']['course_id']));
			} else {
				$this->Session->setFlash(__('The course event could not be saved. Please, try again.', true));
			}
		}
		$courses = $this->CourseEvent->Course->find('list');
		$eventTypes = $this->CourseEvent->EventType->find('list');
		$this->set(compact('courses', 'eventTypes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid course event', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CourseEvent->save($this->data)) {
				$this->Session->setFlash(__('The course event has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course event could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CourseEvent->read(null, $id);
		}
		$courses = $this->CourseEvent->Course->find('list');
		$eventTypes = $this->CourseEvent->EventType->find('list');
		$this->set(compact('courses', 'eventTypes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for course event', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CourseEvent->delete($id)) {
			$this->Session->setFlash(__('Course event deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Course event was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
