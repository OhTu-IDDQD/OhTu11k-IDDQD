<?php
class TrainingAnswersController extends AppController {

	var $name = 'TrainingAnswers';

	function index() {
		$this->TrainingAnswer->recursive = 0;
		$this->set('trainingAnswers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid training answer', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('trainingAnswer', $this->TrainingAnswer->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TrainingAnswer->create();
			if ($this->TrainingAnswer->save($this->data)) {
				$this->Session->setFlash(__('The training answer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The training answer could not be saved. Please, try again.', true));
			}
		}
		$trainingQuestions = $this->TrainingAnswer->TrainingQuestion->find('list');
		$this->set(compact('trainingQuestions'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid training answer', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TrainingAnswer->save($this->data)) {
				$this->Session->setFlash(__('The training answer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The training answer could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TrainingAnswer->read(null, $id);
		}
		$trainingQuestions = $this->TrainingAnswer->TrainingQuestion->find('list');
		$this->set(compact('trainingQuestions'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for training answer', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TrainingAnswer->delete($id)) {
			$this->Session->setFlash(__('Training answer deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Training answer was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>