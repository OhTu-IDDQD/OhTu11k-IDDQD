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


}
?>
