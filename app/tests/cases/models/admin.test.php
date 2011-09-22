<?php
/* Admin Test cases generated on: 2011-09-22 21:55:16 : 1316721316*/
App::import('Model', 'Admin');

class AdminTestCase extends CakeTestCase {
	var $fixtures = array('app.admin', 'app.status');

	function startTest() {
		$this->Admin =& ClassRegistry::init('Admin');
	}

	function endTest() {
		unset($this->Admin);
		ClassRegistry::flush();
	}

}
