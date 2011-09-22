<?php
/* Movement Fixture generated on: 2011-09-22 22:03:23 : 1316721803 */
class MovementFixture extends CakeTestFixture {
	var $name = 'Movement';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'accounts_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'movement_kinds_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'cuenta_receptora' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'monto' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'accounts_id', 'movement_kinds_id'), 'unique' => 1), 'fk_movements_accounts1' => array('column' => 'accounts_id', 'unique' => 0), 'fk_movements_movement_kinds1' => array('column' => 'movement_kinds_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'accounts_id' => 1,
			'movement_kinds_id' => 1,
			'cuenta_receptora' => 1,
			'monto' => 1,
			'created' => '2011-09-22 22:03:23',
			'modified' => '2011-09-22 22:03:23'
		),
	);
}
