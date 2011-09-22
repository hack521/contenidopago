<?php
/* BankAccount Test cases generated on: 2011-09-22 21:55:46 : 1316721346*/
App::import('Model', 'BankAccount');

class BankAccountTestCase extends CakeTestCase {
	var $fixtures = array('app.bank_account', 'app.banks', 'app.status', 'app.users');

	function startTest() {
		$this->BankAccount =& ClassRegistry::init('BankAccount');
	}

	function endTest() {
		unset($this->BankAccount);
		ClassRegistry::flush();
	}

}
