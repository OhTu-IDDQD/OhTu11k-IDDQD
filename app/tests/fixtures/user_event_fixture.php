<?php
/* UserEvent Fixture generated on: 2011-03-25 12:46:52 : 1301050012 */
class UserEventFixture extends CakeTestFixture {
	var $name = 'UserEvent';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'course_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'event_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'course_id' => array('column' => 'course_id', 'unique' => 0), 'event_id' => array('column' => 'event_id', 'unique' => 0), 'user_id' => array('column' => 'user_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'course_id' => 1,
			'event_id' => 1,
			'user_id' => 1,
			'created' => '2011-03-25 12:46:52',
			'modified' => '2011-03-25 12:46:52'
		),
	);
}
?>