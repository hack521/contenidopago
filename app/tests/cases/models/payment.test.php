<?php
/* Payment Test cases generated on: 2011-09-22 22:16:10 : 1316722570*/
App::import('Model', 'Payment');

class PaymentTestCase extends CakeTestCase {
	var $fixtures = array('app.payment', 'app.accounts', 'app.payment_kinds', 'app.currencies', 'app.status');

	function startTest() {
		$this->Payment =& ClassRegistry::init('Payment');
	}

	function endTest() {
		unset($this->Payment);
		ClassRegistry::flush();
	}

}
