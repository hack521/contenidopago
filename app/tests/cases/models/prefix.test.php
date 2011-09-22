<?php
/* Prefix Test cases generated on: 2011-09-22 22:17:33 : 1316722653*/
App::import('Model', 'Prefix');

class PrefixTestCase extends CakeTestCase {
	var $fixtures = array('app.prefix', 'app.countries');

	function startTest() {
		$this->Prefix =& ClassRegistry::init('Prefix');
	}

	function endTest() {
		unset($this->Prefix);
		ClassRegistry::flush();
	}

}
