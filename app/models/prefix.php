<?php
class Prefix extends AppModel {
	var $name = 'Prefix';
	var $displayField = 'numero';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Countries' => array(
			'className' => 'Countries',
			'foreignKey' => 'countries_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
