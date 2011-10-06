<?php
/* TransferAccounts Test cases generated on: 2002-06-27 22:00:55 : 1025208055*/
App::import('Controller', 'TransferAccounts');

class TestTransferAccountsController extends TransferAccountsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TransferAccountsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.transfer_account', 'app.countries', 'app.status', 'app.account', 'app.user', 'app.country', 'app.region', 'app.city', 'app.account_kind', 'app.payment_kind', 'app.accounts_has_service', 'app.service', 'app.prefix', 'app.short_number', 'app.currency', 'app.admin', 'app.bank_account', 'app.banks', 'app.users', 'app.online_account', 'app.payment', 'app.accounts', 'app.payment_kinds', 'app.currencies', 'app.sm');

	function startTest() {
		$this->TransferAccounts =& new TestTransferAccountsController();
		$this->TransferAccounts->constructClasses();
	}

	function endTest() {
		unset($this->TransferAccounts);
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
