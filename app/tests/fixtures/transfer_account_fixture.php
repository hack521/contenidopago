<?php
/* TransferAccount Fixture generated on: 2011-09-22 22:21:15 : 1316722875 */
class TransferAccountFixture extends CakeTestFixture {
	var $name = 'TransferAccount';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'countries_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'status_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'users_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'identificacion' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nombres_beneficiario' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'apellidos_beneficiario' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'countries_id', 'status_id', 'users_id'), 'unique' => 1), 'fk_western_union_accounts_countries1' => array('column' => 'countries_id', 'unique' => 0), 'fk_western_union_accounts_status1' => array('column' => 'status_id', 'unique' => 0), 'fk_western_union_accounts_users1' => array('column' => 'users_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'countries_id' => 1,
			'status_id' => 1,
			'users_id' => 1,
			'identificacion' => 'Lorem ipsum dolor sit amet',
			'nombres_beneficiario' => 'Lorem ipsum dolor sit amet',
			'apellidos_beneficiario' => 'Lorem ipsum dolor sit amet'
		),
	);
}
