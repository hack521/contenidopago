<?php
/* BankAccounts Test cases generated on: 2002-06-27 21:59:14 : 1025207954*/
App::import('Controller', 'BankAccounts');

class TestBankAccountsController extends BankAccountsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class BankAccountsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.bank_account', 'app.banks', 'app.status', 'app.account', 'app.user', 'app.country', 'app.region', 'app.countries', 'app.city', 'app.account_kind', 'app.payment_kind', 'app.accounts_has_service', 'app.service', 'app.prefix', 'app.short_number', 'app.currency', 'app.admin', 'app.online_account', 'app.users', 'app.payment', 'app.accounts', 'app.payment_kinds', 'app.currencies', 'app.sm', 'app.transfer_account');

	function startTest() {
		$this->BankAccounts =& new TestBankAccountsController();
		$this->BankAccounts->constructClasses();
	}

	function endTest() {
		unset($this->BankAccounts);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

	function testStaffIndex() {

	}

	function testStaffView() {

	}

	function testStaffAdd() {

	}

	function testStaffEdit() {

	}

	function testStaffDelete() {

	}

}
