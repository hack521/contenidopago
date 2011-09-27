<?php
/* User Fixture generated on: 2011-09-26 21:40:50 : 1317066050 */
class UserFixture extends CakeTestFixture {
	var $name = 'User';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'countries_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'region_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'ciudades_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'status_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'usuario' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'password' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'identificacion' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nombres' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'apellidos' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'telefono' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'celular' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'direccion' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'direccion_alt' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'codigo_postal' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'correo_electronico' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'correo_alternativo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'facebook' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'twitter' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'countries_id', 'region_id', 'ciudades_id', 'status_id'), 'unique' => 1), 'fk_users_countries1' => array('column' => 'countries_id', 'unique' => 0), 'fk_users_region1' => array('column' => 'region_id', 'unique' => 0), 'fk_users_ciudades1' => array('column' => 'ciudades_id', 'unique' => 0), 'fk_users_status1' => array('column' => 'status_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'countries_id' => 1,
			'region_id' => 1,
			'ciudades_id' => 1,
			'status_id' => 1,
			'usuario' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'identificacion' => 'Lorem ipsum dolor sit amet',
			'nombres' => 'Lorem ipsum dolor sit amet',
			'apellidos' => 'Lorem ipsum dolor sit amet',
			'telefono' => 'Lorem ipsum dolor sit amet',
			'celular' => 'Lorem ipsum dolor sit amet',
			'direccion' => 'Lorem ipsum dolor sit amet',
			'direccion_alt' => 'Lorem ipsum dolor sit amet',
			'codigo_postal' => 'Lorem ipsum dolor sit amet',
			'correo_electronico' => 'Lorem ipsum dolor sit amet',
			'correo_alternativo' => 'Lorem ipsum dolor sit amet',
			'facebook' => 'Lorem ipsum dolor sit amet',
			'twitter' => 'Lorem ipsum dolor sit amet'
		),
	);
}
