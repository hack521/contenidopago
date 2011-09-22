<?php
class Payment extends AppModel {
	var $name = 'Payment';
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
		'PaymentKinds' => array(
			'className' => 'PaymentKinds',
			'foreignKey' => 'payment_kinds_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Currencies' => array(
			'className' => 'Currencies',
			'foreignKey' => 'currencies_id',
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
		)
	);
}
