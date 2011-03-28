<?php
class UserEventsController extends AppController {

	var $name = 'UserEvents';

	function index() {
		$this->UserEvent->recursive = 0;
		$this->set('userEvents', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user event', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('userEvent', $this->UserEvent->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->UserEvent->create();
			if ($this->UserEvent->save($this->data)) {
				$this->Session->setFlash(__('The user event has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user event could not be saved. Please, try again.', true));
			}
		}
		$events = $this->UserEvent->Event->find('list');
		$users = $this->UserEvent->User->find('list');
		$this->set(compact('events', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user event', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->UserEvent->save($this->data)) {
				$this->Session->setFlash(__('The user event has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user event could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UserEvent->read(null, $id);
		}
		$events = $this->UserEvent->Event->find('list');
		$users = $this->UserEvent->User->find('list');
		$this->set(compact('events', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user event', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->UserEvent->delete($id)) {
			$this->Session->setFlash(__('User event deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User event was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>