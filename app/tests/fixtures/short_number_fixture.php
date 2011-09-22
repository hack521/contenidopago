<?php
/* ShortNumber Fixture generated on: 2011-09-22 22:19:36 : 1316722776 */
class ShortNumberFixture extends CakeTestFixture {
	var $name = 'ShortNumber';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'countries_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'numero' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'countries_id'), 'unique' => 1), 'fk_short_numbers_countries1' => array('column' => 'countries_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'countries_id' => 1,
			'numero' => 1
		),
	);
}
