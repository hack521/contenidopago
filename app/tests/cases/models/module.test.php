<?php
/* Module Test cases generated on: 2011-09-22 22:01:46 : 1316721706*/
App::import('Model', 'Module');

class ModuleTestCase extends CakeTestCase {
	var $fixtures = array('app.module');

	function startTest() {
		$this->Module =& ClassRegistry::init('Module');
	}

	function endTest() {
		unset($this->Module);
		ClassRegistry::flush();
	}

}
