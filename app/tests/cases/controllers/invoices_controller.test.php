<?php
/* Invoices Test cases generated on: 2002-06-29 11:58:36 : 1025344716*/
App::import('Controller', 'Invoices');

class TestInvoicesController extends InvoicesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class InvoicesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.invoice', 'app.payments', 'app.users', 'app.admin', 'app.status', 'app.account', 'app.user', 'app.country', 'app.region', 'app.countries', 'app.city', 'app.account_kind', 'app.payment_kind', 'app.accounts_has_service', 'app.service', 'app.prefix', 'app.short_number', 'app.currency', 'app.bank_account', 'app.banks', 'app.online_account', 'app.payment', 'app.accounts', 'app.payment_kinds', 'app.currencies', 'app.sm', 'app.transfer_account');

	function startTest() {
		$this->Invoices =& new TestInvoicesController();
		$this->Invoices->constructClasses();
	}

	function endTest() {
		unset($this->Invoices);
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
