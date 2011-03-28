<?php
class TrainingQuestionsController extends AppController {

	var $name = 'TrainingQuestions';

	function index() {
		$this->TrainingQuestion->recursive = 0;
		$this->set('trainingQuestions', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid training question', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('trainingQuestion', $this->TrainingQuestion->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TrainingQuestion->create();
			if ($this->TrainingQuestion->save($this->data)) {
				$this->Session->setFlash(__('The training question has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The training question could not be saved. Please, try again.', true));
			}
		}
		$courses = $this->TrainingQuestion->Course->find('list');
		$this->set(compact('courses'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid training question', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TrainingQuestion->save($this->data)) {
				$this->Session->setFlash(__('The training question has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The training question could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TrainingQuestion->read(null, $id);
		}
		$courses = $this->TrainingQuestion->Course->find('list');
		$this->set(compact('courses'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for training question', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TrainingQuestion->delete($id)) {
			$this->Session->setFlash(__('Training question deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Training question was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>