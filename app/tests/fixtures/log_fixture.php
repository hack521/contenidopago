<?php
/* Log Fixture generated on: 2011-09-22 21:59:50 : 1316721590 */
class LogFixture extends CakeTestFixture {
	var $name = 'Log';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'modules_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'accion' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'usuario_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'administrador_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'modules_id'), 'unique' => 1), 'fk_logs_modules1' => array('column' => 'modules_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'modules_id' => 1,
			'created' => '2011-09-22 21:59:50',
			'modified' => '2011-09-22 21:59:50',
			'accion' => 'Lorem ipsum dolor sit amet',
			'usuario_id' => 1,
			'administrador_id' => 1
		),
	);
}
