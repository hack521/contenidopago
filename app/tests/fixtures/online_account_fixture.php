<?php
/* OnlineAccount Fixture generated on: 2011-09-22 22:05:00 : 1316721900 */
class OnlineAccountFixture extends CakeTestFixture {
	var $name = 'OnlineAccount';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'users_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'status_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'identificador_de_cuenta' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fecha' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'users_id', 'status_id'), 'unique' => 1), 'fk_online_accounts_users1' => array('column' => 'users_id', 'unique' => 0), 'fk_online_accounts_status1' => array('column' => 'status_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'users_id' => 1,
			'status_id' => 1,
			'identificador_de_cuenta' => 'Lorem ipsum dolor sit amet',
			'fecha' => '2011-09-22 22:05:00',
			'created' => '2011-09-22 22:05:00',
			'modified' => '2011-09-22 22:05:00'
		),
	);
}
