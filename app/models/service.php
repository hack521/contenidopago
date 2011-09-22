<?php
class Service extends AppModel {
	var $name = 'Service';
	var $displayField = 'id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'AccountsHa' => array(
			'className' => 'AccountsHa',
			'joinTable' => 'accounts_has_services',
			'foreignKey' => 'service_id',
			'associationForeignKey' => 'accounts_ha_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
