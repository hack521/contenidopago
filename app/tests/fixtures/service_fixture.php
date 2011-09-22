<?php
/* Service Fixture generated on: 2011-09-22 22:19:06 : 1316722746 */
class ServiceFixture extends CakeTestFixture {
	var $name = 'Service';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'descripcion' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cantidad' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'costo' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'comision' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'cantidad' => 1,
			'costo' => 1,
			'comision' => 1,
			'created' => '2011-09-22 22:19:06',
			'modified' => '2011-09-22 22:19:06'
		),
	);
}
