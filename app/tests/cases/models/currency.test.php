<?php
/* Currency Test cases generated on: 2011-09-22 21:58:07 : 1316721487*/
App::import('Model', 'Currency');

class CurrencyTestCase extends CakeTestCase {
	var $fixtures = array('app.currency');

	function startTest() {
		$this->Currency =& ClassRegistry::init('Currency');
	}

	function endTest() {
		unset($this->Currency);
		ClassRegistry::flush();
	}

}
