<?php
/* OnlineAccounts Test cases generated on: 2002-06-27 22:00:02 : 1025208002*/
App::import('Controller', 'OnlineAccounts');

class TestOnlineAccountsController extends OnlineAccountsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class OnlineAccountsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.online_account', 'app.users', 'app.status', 'app.account', 'app.user', 'app.country', 'app.region', 'app.countries', 'app.city', 'app.account_kind', 'app.payment_kind', 'app.accounts_has_service', 'app.service', 'app.prefix', 'app.short_number', 'app.currency', 'app.admin', 'app.bank_account', 'app.banks', 'app.payment', 'app.accounts', 'app.payment_kinds', 'app.currencies', 'app.sm', 'app.transfer_account');

	function startTest() {
		$this->OnlineAccounts =& new TestOnlineAccountsController();
		$this->OnlineAccounts->constructClasses();
	}

	function endTest() {
		unset($this->OnlineAccounts);
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
