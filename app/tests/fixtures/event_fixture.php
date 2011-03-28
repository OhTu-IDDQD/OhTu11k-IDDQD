<?php
/* Event Fixture generated on: 2011-03-25 12:12:12 : 1301047932 */
class EventFixture extends CakeTestFixture {
	var $name = 'Event';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'course_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'p_start' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'p_end' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'crated' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'course_id' => array('column' => 'course_id', 'unique' => 0), 'user_id' => array('column' => 'user_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'course_id' => 1,
			'user_id' => 1,
			'p_start' => '2011-03-25 12:12:12',
			'p_end' => '2011-03-25 12:12:12',
			'crated' => '2011-03-25 12:12:12',
			'modified' => '2011-03-25 12:12:12'
		),
	);
}
?>