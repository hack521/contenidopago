<?php
class AccountsHasService extends AppModel {
	var $name = 'AccountsHasService';
	var $primaryKey = 'yes';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Accounts' => array(
			'className' => 'Accounts',
			'foreignKey' => 'accounts_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Services' => array(
			'className' => 'Services',
			'foreignKey' => 'services_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Prefixes' => array(
			'className' => 'Prefixes',
			'foreignKey' => 'prefixes_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ShortNumbers' => array(
			'className' => 'ShortNumbers',
			'foreignKey' => 'short_numbers_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AccountIdentifier' => array(
			'className' => 'AccountIdentifier',
			'foreignKey' => 'account_identifier_id',
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
