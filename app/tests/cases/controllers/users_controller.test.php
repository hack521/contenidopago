<?php
/* Users Test cases generated on: 2011-09-22 22:36:21 : 1316723781*/
App::import('Controller', 'Users');

class TestUsersController extends UsersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UsersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.user', 'app.countries', 'app.region', 'app.city', 'app.status', 'app.account', 'app.users', 'app.account_kinds', 'app.payment_kinds', 'app.accounts_has_service', 'app.accounts', 'app.services', 'app.prefixes', 'app.short_numbers', 'app.account_identifier', 'app.currencies', 'app.bank', 'app.bank_account', 'app.online_account', 'app.transfer_account', 'app.admin', 'app.payment', 'app.sm');

	function startTest() {
		$this->Users =& new TestUsersController();
		$this->Users->constructClasses();
	}

	function endTest() {
		unset($this->Users);
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
