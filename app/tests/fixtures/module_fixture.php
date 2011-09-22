<?php
/* Module Fixture generated on: 2011-09-22 22:01:46 : 1316721706 */
class ModuleFixture extends CakeTestFixture {
	var $name = 'Module';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'descripcion' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'descripcion' => 'Lorem ipsum dolor sit amet'
		),
	);
}
