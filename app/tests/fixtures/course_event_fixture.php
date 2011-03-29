<?php
/* CourseEvent Fixture generated on: 2011-03-29 20:13:00 : 1301418780 */
class CourseEventFixture extends CakeTestFixture {
	var $name = 'CourseEvent';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'course_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'event_type_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'day' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4),
		'start' => array('type' => 'time', 'null' => true, 'default' => NULL),
		'end' => array('type' => 'time', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'course_id' => array('column' => 'course_id', 'unique' => 0), 'event_type_id' => array('column' => 'event_type_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'course_id' => 1,
			'event_type_id' => 1,
			'day' => 1,
			'start' => '20:13:00',
			'end' => '20:13:00',
			'created' => '2011-03-29 20:13:00',
			'modified' => '2011-03-29 20:13:00'
		),
	);
}
?>