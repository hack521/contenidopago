<?php
/* Sm Test cases generated on: 2011-09-22 22:20:05 : 1316722805*/
App::import('Model', 'Sm');

class SmTestCase extends CakeTestCase {
	var $fixtures = array('app.sm', 'app.status');

	function startTest() {
		$this->Sm =& ClassRegistry::init('Sm');
	}

	function endTest() {
		unset($this->Sm);
		ClassRegistry::flush();
	}

}
