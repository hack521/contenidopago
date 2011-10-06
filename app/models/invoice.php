<?php
class Invoice extends AppModel {
	var $name = 'Invoice';
	var $displayField = 'codigo_factura';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Payments' => array(
			'className' => 'Payments',
			'foreignKey' => 'payments_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Users' => array(
			'className' => 'Users',
			'foreignKey' => 'users_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Admin' => array(
			'className' => 'Admin',
			'foreignKey' => 'administradores_id',
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
		'Accounts' => array(
			'className' => 'Accounts',
			'foreignKey' => 'accounts_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
