<?php
class UserCourse extends AppModel {
	var $name = 'UserCourse';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Course' => array(
			'className' => 'Course',
			'foreignKey' => 'course_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	function beforeSave() {
	//	die(pr($this->Course));
		$this->Course->Event->deleteAll(
			array(
				'Event.user_id' => $this->data['UserCourse']['user_id'], 
				'Event.course_id' => $this->data['UserCourse']['course_id']
			)
		);
		
		$this->deleteAll(
			array(
				'UserCourse.course_id' => $this->data['UserCourse']['course_id'], 
				'UserCourse.user_id' => $this->data['UserCourse']['user_id']
			)
		);
		
		// Haetaan kaikki kurssin tapahtumat
		$events = $this->Course->getEvents($this->data['UserCourse']['course_id']);
		//die(pr($events));
		foreach($events as $event) {
			$event['user_id'] = $this->data['UserCourse']['user_id'];

			if ( $event['event_type_id'] == 1 ) {
				$this->Course->Event->create($event);
				$this->Course->Event->save();
			}
			else if ( $event['event_type_id'] == 2 ) {
				if ( $event['course_event_id'] == $this->data['UserCourse']['course_event_id'] ) {
					$this->Course->Event->create($event);
					$this->Course->Event->save();
				}
			}

		}
		
	return true;

	}
	
	function beforeDelete() {

		$data = $this->findById($this->id);

		$this->Course->Event->deleteAll(
			array(
				'Event.user_id' => $data['UserCourse']['user_id'], 
				'Event.course_id' => $data['UserCourse']['course_id']
			)
		);
		
		return true;
	}
}
?>
