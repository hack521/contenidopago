<?php
/* AccountsHasServices Test cases generated on: 2011-09-23 18:32:24 : 1316795544*/
App::import('Controller', 'AccountsHasServices');

class TestAccountsHasServicesController extends AccountsHasServicesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AccountsHasServicesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.accounts_has_service', 'app.accounts', 'app.services', 'app.prefixes', 'app.short_numbers', 'app.account_identifier', 'app.countries', 'app.currencies', 'app.status', 'app.account', 'app.user', 'app.region', 'app.city', 'app.account_kind', 'app.payment_kind', 'app.bank', 'app.bank_account', 'app.online_account', 'app.users', 'app.transfer_account', 'app.admin', 'app.payment', 'app.payment_kinds', 'app.sm');

	function startTest() {
		$this->AccountsHasServices =& new TestAccountsHasServicesController();
		$this->AccountsHasServices->constructClasses();
	}

	function endTest() {
		unset($this->AccountsHasServices);
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
