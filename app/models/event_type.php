<?php
class EventType extends AppModel {
	var $name = 'EventType';
	var $displayField = 'name';
	var $actsAs = array('Containable');
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'CourseEvent' => array(
			'className' => 'CourseEvent',
			'foreignKey' => 'event_type_id',
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
			'foreignKey' => 'event_type_id',
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

}
?>
