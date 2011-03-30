<?php
class UserCoursesController extends AppController {

	var $name = 'UserCourses';

	function index() {

		$this->paginate = array(
			'conditions' => array('UserCourse.user_id' => $this->Auth->user('id'))
		);
		
		$userCourses = $this->paginate('UserCourse');
		


		$this->set('userCourses', $this->paginate('UserCourse'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user course', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('userCourse', $this->UserCourse->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->data['UserCourse']['user_id'] = $this->Session->read('Auth.User.id');
			$this->UserCourse->create();
			if ($this->UserCourse->save($this->data)) {
				$this->Session->setFlash(__('The user course has been saved', true));
				$this->redirect(array('plugin' => false, 'controller' => 'courses', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user course could not be saved. Please, try again.', true));
			}
		}

		$users = $this->UserCourse->User->find('list');
		$courses = $this->UserCourse->Course->find('list');
		$this->set(compact('users', 'courses'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user course', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->UserCourse->save($this->data)) {
				$this->Session->setFlash(__('The user course has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user course could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UserCourse->read(null, $id);
		}
		$users = $this->UserCourse->User->find('list');
		$courses = $this->UserCourse->Course->find('list');
		$this->set(compact('users', 'courses'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user course', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->UserCourse->delete($id)) {
			$this->Session->setFlash(__('User course deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User course was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
