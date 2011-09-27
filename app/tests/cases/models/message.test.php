<?php
/* Message Test cases generated on: 2011-09-23 22:50:52 : 1316811052*/
App::import('Model', 'Message');

class MessageTestCase extends CakeTestCase {
	var $fixtures = array('app.message', 'app.users');

	function startTest() {
		$this->Message =& ClassRegistry::init('Message');
	}

	function endTest() {
		unset($this->Message);
		ClassRegistry::flush();
	}

}
