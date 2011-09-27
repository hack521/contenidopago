<?php
/* Cities Test cases generated on: 2011-09-26 22:05:48 : 1317067548*/
App::import('Controller', 'Cities');

class TestCitiesController extends CitiesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CitiesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.city', 'app.region', 'app.countries', 'app.user', 'app.status', 'app.account', 'app.account_kind', 'app.payment_kind', 'app.accounts_has_service', 'app.service', 'app.prefixe', 'app.short_number', 'app.account_identifier', 'app.currency', 'app.admin', 'app.bank_account', 'app.banks', 'app.users', 'app.online_account', 'app.payment', 'app.accounts', 'app.payment_kinds', 'app.currencies', 'app.sm', 'app.transfer_account');

	function startTest() {
		$this->Cities =& new TestCitiesController();
		$this->Cities->constructClasses();
	}

	function endTest() {
		unset($this->Cities);
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
