<?php
/* News Fixture generated on: 2011-09-22 22:04:02 : 1316721842 */
class NewsFixture extends CakeTestFixture {
	var $name = 'News';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1
		),
	);
}
