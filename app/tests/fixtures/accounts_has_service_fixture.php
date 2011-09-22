<?php
/* AccountsHasService Fixture generated on: 2011-09-22 21:53:24 : 1316721204 */
class AccountsHasServiceFixture extends CakeTestFixture {
	var $name = 'AccountsHasService';

	var $fields = array(
		'accounts_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'services_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'prefixes_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'short_numbers_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'account_identifier_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'currencies_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'status_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'palabra' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'comision' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '3,2'),
		'fecha' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'saldo_actual' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'saldo_anterior' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'saldo_promedio' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => array('accounts_id', 'services_id', 'prefixes_id', 'short_numbers_id', 'account_identifier_id', 'currencies_id', 'status_id'), 'unique' => 1), 'fk_accounts_has_services_services1' => array('column' => 'services_id', 'unique' => 0), 'fk_accounts_has_services_accounts1' => array('column' => 'accounts_id', 'unique' => 0), 'fk_accounts_has_services_prefixes1' => array('column' => 'prefixes_id', 'unique' => 0), 'fk_accounts_has_services_short_numbers1' => array('column' => 'short_numbers_id', 'unique' => 0), 'fk_accounts_has_services_account_identifier1' => array('column' => 'account_identifier_id', 'unique' => 0), 'fk_accounts_has_services_currencies1' => array('column' => 'currencies_id', 'unique' => 0), 'fk_accounts_has_services_status1' => array('column' => 'status_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'accounts_id' => 1,
			'services_id' => 1,
			'prefixes_id' => 1,
			'short_numbers_id' => 1,
			'account_identifier_id' => 1,
			'currencies_id' => 1,
			'status_id' => 1,
			'palabra' => 'Lorem ipsum dolor sit amet',
			'comision' => 1,
			'fecha' => '2011-09-22 21:53:24',
			'saldo_actual' => 1,
			'saldo_anterior' => 1,
			'saldo_promedio' => 1,
			'created' => '2011-09-22 21:53:24',
			'modified' => '2011-09-22 21:53:24'
		),
	);
}
