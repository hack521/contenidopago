<?php
class Account extends AppModel {
	var $name = 'Account';
	var $displayField = 'descripcion';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'users_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AccountKind' => array(
			'className' => 'AccountKind',
			'foreignKey' => 'account_kinds_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Status' => array(
			'className' => 'Status',
			'foreignKey' => 'status_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PaymentKind' => array(
			'className' => 'PaymentKind',
			'foreignKey' => 'payment_kinds_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
