<?php
/* Region Test cases generated on: 2011-09-22 22:18:32 : 1316722712*/
App::import('Model', 'Region');

class RegionTestCase extends CakeTestCase {
	var $fixtures = array('app.region', 'app.countries', 'app.city', 'app.user');

	function startTest() {
		$this->Region =& ClassRegistry::init('Region');
	}

	function endTest() {
		unset($this->Region);
		ClassRegistry::flush();
	}

}
