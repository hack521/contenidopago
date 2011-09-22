<?php
class Movement extends AppModel {
	var $name = 'Movement';
	var $displayField = 'id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Accounts' => array(
			'className' => 'Accounts',
			'foreignKey' => 'accounts_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'MovementKinds' => array(
			'className' => 'MovementKinds',
			'foreignKey' => 'movement_kinds_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
