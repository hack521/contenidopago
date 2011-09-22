<?php
/* AccountIdentifier Test cases generated on: 2011-09-22 21:52:01 : 1316721121*/
App::import('Model', 'AccountIdentifier');

class AccountIdentifierTestCase extends CakeTestCase {
	var $fixtures = array('app.account_identifier', 'app.countries', 'app.accounts_has_service');

	function startTest() {
		$this->AccountIdentifier =& ClassRegistry::init('AccountIdentifier');
	}

	function endTest() {
		unset($this->AccountIdentifier);
		ClassRegistry::flush();
	}

}
