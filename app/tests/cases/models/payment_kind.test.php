<?php
/* PaymentKind Test cases generated on: 2011-09-22 22:05:33 : 1316721933*/
App::import('Model', 'PaymentKind');

class PaymentKindTestCase extends CakeTestCase {
	var $fixtures = array('app.payment_kind');

	function startTest() {
		$this->PaymentKind =& ClassRegistry::init('PaymentKind');
	}

	function endTest() {
		unset($this->PaymentKind);
		ClassRegistry::flush();
	}

}
