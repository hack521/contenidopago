<?php
/* Prefixes Test cases generated on: 2002-06-29 01:58:06 : 1025308686*/
App::import('Controller', 'Prefixes');

class TestPrefixesController extends PrefixesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PrefixesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.prefix', 'app.countries');

	function startTest() {
		$this->Prefixes =& new TestPrefixesController();
		$this->Prefixes->constructClasses();
	}

	function endTest() {
		unset($this->Prefixes);
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
