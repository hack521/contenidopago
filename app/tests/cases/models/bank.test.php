<?php
/* Bank Test cases generated on: 2011-09-22 21:56:25 : 1316721385*/
App::import('Model', 'Bank');

class BankTestCase extends CakeTestCase {
	var $fixtures = array('app.bank', 'app.countries');

	function startTest() {
		$this->Bank =& ClassRegistry::init('Bank');
	}

	function endTest() {
		unset($this->Bank);
		ClassRegistry::flush();
	}

}
