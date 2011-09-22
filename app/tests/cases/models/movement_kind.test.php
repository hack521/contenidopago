<?php
/* MovementKind Test cases generated on: 2011-09-22 22:02:50 : 1316721770*/
App::import('Model', 'MovementKind');

class MovementKindTestCase extends CakeTestCase {
	var $fixtures = array('app.movement_kind');

	function startTest() {
		$this->MovementKind =& ClassRegistry::init('MovementKind');
	}

	function endTest() {
		unset($this->MovementKind);
		ClassRegistry::flush();
	}

}
