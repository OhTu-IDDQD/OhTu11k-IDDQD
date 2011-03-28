<?php
class TrainingAnswer extends AppModel {
	var $name = 'TrainingAnswer';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'TrainingQuestion' => array(
			'className' => 'TrainingQuestion',
			'foreignKey' => 'question_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>