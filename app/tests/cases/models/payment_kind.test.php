<?php
/* PaymentKind Test cases generated on: 2011-09-23 22:32:54 : 1316809974*/
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
