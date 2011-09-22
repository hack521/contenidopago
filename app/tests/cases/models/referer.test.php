<?php
/* Referer Test cases generated on: 2011-09-22 22:18:03 : 1316722683*/
App::import('Model', 'Referer');

class RefererTestCase extends CakeTestCase {
	var $fixtures = array('app.referer', 'app.users');

	function startTest() {
		$this->Referer =& ClassRegistry::init('Referer');
	}

	function endTest() {
		unset($this->Referer);
		ClassRegistry::flush();
	}

}
