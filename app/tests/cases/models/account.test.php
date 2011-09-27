<?php
/* Account Test cases generated on: 2011-09-26 16:14:46 : 1317046486*/
App::import('Model', 'Account');

class AccountTestCase extends CakeTestCase {
	var $fixtures = array('app.account', 'app.users', 'app.account_kinds', 'app.status', 'app.accounts_has_service', 'app.service', 'app.prefixe', 'app.short_number', 'app.countries', 'app.account_identifier', 'app.currency', 'app.admin', 'app.bank_account', 'app.banks', 'app.online_account', 'app.payment', 'app.accounts', 'app.payment_kinds', 'app.currencies', 'app.sm', 'app.transfer_account', 'app.user', 'app.region', 'app.city');

	function startTest() {
		$this->Account =& ClassRegistry::init('Account');
	}

	function endTest() {
		unset($this->Account);
		ClassRegistry::flush();
	}

}
