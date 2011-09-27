<?php
/* Account Fixture generated on: 2011-09-26 16:14:44 : 1317046484 */
class AccountFixture extends CakeTestFixture {
	var $name = 'Account';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'users_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'account_kinds_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'status_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'payment_kinds_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'descripcion' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'numero_cuenta' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cuenta_banco_defecto' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'cuenta_online_defecto' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'cuenta_transferencia_defecto' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'users_id', 'account_kinds_id', 'status_id', 'payment_kinds_id'), 'unique' => 1), 'fk_accounts_users' => array('column' => 'users_id', 'unique' => 0), 'fk_accounts_account_kinds1' => array('column' => 'account_kinds_id', 'unique' => 0), 'fk_accounts_status1' => array('column' => 'status_id', 'unique' => 0), 'fk_accounts_payment_kinds1' => array('column' => 'payment_kinds_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'users_id' => 1,
			'account_kinds_id' => 1,
			'status_id' => 1,
			'payment_kinds_id' => 1,
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'numero_cuenta' => 'Lorem ipsum dolor sit amet',
			'cuenta_banco_defecto' => 1,
			'cuenta_online_defecto' => 1,
			'cuenta_transferencia_defecto' => 1,
			'created' => '2011-09-26 16:14:44',
			'modified' => '2011-09-26 16:14:44'
		),
	);
}
