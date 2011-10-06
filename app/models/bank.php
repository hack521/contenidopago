<?php
class Bank extends AppModel {
	var $name = 'Bank';
	var $displayField = 'descripcion';
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
