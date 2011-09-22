<?php
/* AccountIdentifier Fixture generated on: 2011-09-22 21:54:13 : 1316721253 */
class AccountIdentifierFixture extends CakeTestFixture {
	var $name = 'AccountIdentifier';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'countries_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'palabra' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => array('id', 'countries_id'), 'unique' => 1), 'fk_account_identifier_countries1' => array('column' => 'countries_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'countries_id' => 1,
			'palabra' => 'Lorem ipsum dolor sit amet'
		),
	);
}
