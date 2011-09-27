<?php
/* Regions Test cases generated on: 2011-09-26 21:52:27 : 1317066747*/
App::import('Controller', 'Regions');

class TestRegionsController extends RegionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RegionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.region', 'app.countries', 'app.city', 'app.user', 'app.status', 'app.account', 'app.account_kind', 'app.payment_kind', 'app.accounts_has_service', 'app.service', 'app.prefixe', 'app.short_number', 'app.account_identifier', 'app.currency', 'app.admin', 'app.bank_account', 'app.banks', 'app.users', 'app.online_account', 'app.payment', 'app.accounts', 'app.payment_kinds', 'app.currencies', 'app.sm', 'app.transfer_account');

	function startTest() {
		$this->Regions =& new TestRegionsController();
		$this->Regions->constructClasses();
	}

	function endTest() {
		unset($this->Regions);
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
