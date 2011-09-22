<?php
/* BankAccount Fixture generated on: 2011-09-22 21:55:46 : 1316721346 */
class BankAccountFixture extends CakeTestFixture {
	var $name = 'BankAccount';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'banks_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'status_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'users_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'numero_cuenta' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'identificacion_beneficiario' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'beneficiario' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'banks_id', 'status_id', 'users_id'), 'unique' => 1), 'fk_bank_accounts_banks1' => array('column' => 'banks_id', 'unique' => 0), 'fk_bank_accounts_status1' => array('column' => 'status_id', 'unique' => 0), 'fk_bank_accounts_users1' => array('column' => 'users_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'banks_id' => 1,
			'status_id' => 1,
			'users_id' => 1,
			'numero_cuenta' => 'Lorem ipsum dolor sit amet',
			'identificacion_beneficiario' => 'Lorem ipsum dolor sit amet',
			'beneficiario' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-09-22 21:55:46',
			'modified' => '2011-09-22 21:55:46'
		),
	);
}
