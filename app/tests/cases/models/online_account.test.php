<?php
/* OnlineAccount Test cases generated on: 2011-09-22 22:05:00 : 1316721900*/
App::import('Model', 'OnlineAccount');

class OnlineAccountTestCase extends CakeTestCase {
	var $fixtures = array('app.online_account', 'app.users', 'app.status');

	function startTest() {
		$this->OnlineAccount =& ClassRegistry::init('OnlineAccount');
	}

	function endTest() {
		unset($this->OnlineAccount);
		ClassRegistry::flush();
	}

}
