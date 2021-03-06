<?php
class CourseEvent extends AppModel {
	var $name = 'CourseEvent';
	var $actsAs = array('Containable');
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Course' => array(
			'className' => 'Course',
			'foreignKey' => 'course_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EventType' => array(
			'className' => 'EventType',
			'foreignKey' => 'event_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	
function eventsByDay($course_id, $day) {
	$events = $this->find(
		'all', 
		array(
			'conditions' => array(
				'CourseEvent.course_id' => $course_id, 
				'CourseEvent.day' => $day
			), 
			'contain' => array()
		)
	);
	
	return $events;
}

}
?>
