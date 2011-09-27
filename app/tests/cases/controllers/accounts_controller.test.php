<?php
/* Accounts Test cases generated on: 2011-09-26 16:14:53 : 1317046493*/
App::import('Controller', 'Accounts');

class TestAccountsController extends AccountsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AccountsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.account', 'app.users', 'app.account_kinds', 'app.status', 'app.accounts_has_service', 'app.service', 'app.prefixe', 'app.short_number', 'app.countries', 'app.account_identifier', 'app.currency', 'app.admin', 'app.bank_account', 'app.banks', 'app.online_account', 'app.payment', 'app.accounts', 'app.payment_kinds', 'app.currencies', 'app.sm', 'app.transfer_account', 'app.user', 'app.region', 'app.city');

	function startTest() {
		$this->Accounts =& new TestAccountsController();
		$this->Accounts->constructClasses();
	}

	function endTest() {
		unset($this->Accounts);
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
