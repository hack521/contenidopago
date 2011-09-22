<?php
/* ShortNumber Test cases generated on: 2011-09-22 22:19:36 : 1316722776*/
App::import('Model', 'ShortNumber');

class ShortNumberTestCase extends CakeTestCase {
	var $fixtures = array('app.short_number', 'app.countries');

	function startTest() {
		$this->ShortNumber =& ClassRegistry::init('ShortNumber');
	}

	function endTest() {
		unset($this->ShortNumber);
		ClassRegistry::flush();
	}

}
