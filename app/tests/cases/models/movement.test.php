<?php
/* Movement Test cases generated on: 2011-09-22 22:03:23 : 1316721803*/
App::import('Model', 'Movement');

class MovementTestCase extends CakeTestCase {
	var $fixtures = array('app.movement', 'app.accounts', 'app.movement_kinds');

	function startTest() {
		$this->Movement =& ClassRegistry::init('Movement');
	}

	function endTest() {
		unset($this->Movement);
		ClassRegistry::flush();
	}

}
