<?php
/* Referer Fixture generated on: 2011-09-22 22:18:03 : 1316722683 */
class RefererFixture extends CakeTestFixture {
	var $name = 'Referer';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'users_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_referer' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'users_id'), 'unique' => 1), 'fk_referers_users1' => array('column' => 'users_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'users_id' => 1,
			'user_referer' => 1
		),
	);
}
