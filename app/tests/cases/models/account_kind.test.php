<?php
/* AccountKind Test cases generated on: 2011-09-22 21:52:03 : 1316721123*/
App::import('Model', 'AccountKind');

class AccountKindTestCase extends CakeTestCase {
	var $fixtures = array('app.account_kind');

	function startTest() {
		$this->AccountKind =& ClassRegistry::init('AccountKind');
	}

	function endTest() {
		unset($this->AccountKind);
		ClassRegistry::flush();
	}

}
