<?php
/* Message Fixture generated on: 2011-09-22 22:01:18 : 1316721678 */
class MessageFixture extends CakeTestFixture {
	var $name = 'Message';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'users_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'destinatario' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'mensaje' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'users_id'), 'unique' => 1), 'fk_messages_users1' => array('column' => 'users_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'users_id' => 1,
			'destinatario' => 1,
			'mensaje' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-09-22 22:01:18',
			'modified' => '2011-09-22 22:01:18'
		),
	);
}
