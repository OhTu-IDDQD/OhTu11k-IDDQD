<?php
/*
 * controllers/events_controller.php
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
 
class EventsController extends FullCalendarAppController {

	var $name = 'Events';

	function index() {
	
		$sql_fragment = array(
			'conditions' => array(
				'Event.user_id' => $this->Auth->user('id'), 
				'Event.start >=' => date('Y-m-d H:i:s')
			), 
			'order' => 'Event.start'
		);

		if ( $this->RequestHandler->ext == 'csv' ) $events = $this->Event->find('all', $sql_fragment);
		else {
			$this->paginate = $sql_fragment;
			$events = $this->paginate('Event');
		}

		$this->set('events', $events);
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid event', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('event', $this->Event->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->data['Event']['user_id'] = $this->Session->read('Auth.User.id');
			$this->Event->create();
			if ($this->Event->save($this->data)) {
				$this->Session->setFlash(__('The event has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event could not be saved. Please, try again.', true));
			}
		}
		$this->set('eventTypes', $this->Event->EventType->find('list', array('conditions' => array('EventType.id NOT' => array(1,2)))));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid event', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Event->save($this->data)) {
				$this->Session->setFlash(__('The event has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Event->read(null, $id);
		}
		$this->set('eventTypes', $this->Event->EventType->find('list'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for event', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Event->delete($id)) {
			$this->Session->setFlash(__('Event deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Event was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function feed($id=null) {
		$this->layout = "ajax";
		$vars = $this->params['url'];
		$conditions = array('conditions' => array('UNIX_TIMESTAMP(start) >=' => $vars['start'], 'UNIX_TIMESTAMP(start) <=' => $vars['end'], 'user_id' => $this->Session->read('Auth.User.id')));
		$events = $this->Event->find('all', $conditions);
		foreach($events as $event) {
			if($event['Event']['all_day'] == 1) { 
				$allday = true; 
				$end = $event['Event']['start'];
			} else { 
				$allday = false;
				$end = $event['Event']['end'];
			}
			$data[] = array(
					'id' => $event['Event']['id'], 
					'title'=>$event['Event']['title'], 
					'start'=>$event['Event']['start'],
					'end' => $end,
					'allDay' => $allday,
					'url' => 'full_calendar/events/view/'.$event['Event']['id'],
					'details' => $event['Event']['details'],
					'className' => $event['EventType']['color']
			);
		}
		$this->set("json", json_encode($data));
	}
	
	function update() {
		$vars = $this->params['url'];
		$this->Event->id = $vars['id'];
		$this->Event->saveField('start', $vars['start']);
		$this->Event->saveField('end', $vars['end']);
		$this->Event->saveField('all_day', $vars['allday']);
	}

}
?>
