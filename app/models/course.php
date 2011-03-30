<?php
class Course extends AppModel {
	var $name = 'Course';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'CourseEvent' => array(
			'className' => 'CourseEvent',
			'foreignKey' => 'course_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'course_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'TrainingQuestion' => array(
			'className' => 'TrainingQuestion',
			'foreignKey' => 'course_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


function getCoursesData() {
	$courses = file_get_contents('http://www.cs.helsinki.fi/u/tkairi/rajapinta/courses.json');
	$courses = json_decode($courses,true);
	$new_courses = 0;
	
	foreach($courses['courses'] as $course) {
		$exist = $this->find(
			'first', 
			array(
				'conditions' => array(
					'Course.name' => $course['course'], 
					'Course.start' => $course['start_date'], 
					'Course.end' => $course['end_date']
				)
			)
		);
		if ( empty($exist) ) {
			$this->create(
				array(
					'name' => $course['course'], 
					'start' => $course['start_date'], 
					'end' => $course['end_date']
				)
			);
			$this->save();
			
			$new_courses++;
		}
	}
	
	return $new_courses;
}

function getEvents($course_id) {
	$course = $this->findById($course_id);
	$events = $this->CourseEvent->find('all', array('conditions' => array('CourseEvent.course_id' => $course_id), 'contain' => array()));
	
	$start = strtotime($course['Course']['start']);
	$end = strtotime($course['Course']['end']);
	$events = array();
	
	$d_count = 0;
	$day = date('N',$start);
	$d_convert = array(1 => 2, 2 => 3, 3 => 4, 4 => 5, 5 => 6, 6 => 7, 7 => 1);

	while ( $d_count++ < 7 ) {
		$c_events = $this->CourseEvent->eventsByDay($course_id, $d_convert[$day]);
		//pr($c_events);
		if ( !empty($c_events) ) {
			foreach($c_events as $event) {
				$current = strtotime("+".($d_count-1)." days",$start);
				//die("ASD: ".$current);
				$dates = array();
				while ( $current <= $end ) {
					$events[] = array(
						'course_event_id' => $event['CourseEvent']['id'], 
						'title' => $course['Course']['name'], 
						'event_type_id' => $event['CourseEvent']['event_type_id'], 
						'start' => date('Y-m-d', $current)." ".$event['CourseEvent']['start'], 
						'end' => date('Y-m-d', $current)." ".$event['CourseEvent']['end'], 
						'course_id' => $course_id
					);
					$current = strtotime('+7 days', $current);
				}
			}
		}
		
		if ( ++$day == 8 ) $day=1;	
	}

	return $events;
	
}


}
?>
