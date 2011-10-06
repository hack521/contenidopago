<?php
/* ShortNumbers Test cases generated on: 2002-06-29 01:58:47 : 1025308727*/
App::import('Controller', 'ShortNumbers');

class TestShortNumbersController extends ShortNumbersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ShortNumbersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.short_number', 'app.countries');

	function startTest() {
		$this->ShortNumbers =& new TestShortNumbersController();
		$this->ShortNumbers->constructClasses();
	}

	function endTest() {
		unset($this->ShortNumbers);
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
