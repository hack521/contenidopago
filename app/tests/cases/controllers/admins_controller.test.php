<?php
/* Admins Test cases generated on: 2011-09-23 16:14:51 : 1316787291*/
App::import('Controller', 'Admins');

class TestAdminsController extends AdminsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AdminsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.admin', 'app.status', 'app.account', 'app.users', 'app.account_kinds', 'app.payment_kinds', 'app.accounts_has_service', 'app.accounts', 'app.services', 'app.prefixes', 'app.short_numbers', 'app.account_identifier', 'app.countries', 'app.currencies', 'app.bank', 'app.bank_account', 'app.online_account', 'app.transfer_account', 'app.payment', 'app.sm', 'app.user', 'app.region', 'app.city');

	function startTest() {
		$this->Admins =& new TestAdminsController();
		$this->Admins->constructClasses();
	}

	function endTest() {
		unset($this->Admins);
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
