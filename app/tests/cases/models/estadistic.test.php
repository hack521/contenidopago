<?php
/* Estadistic Test cases generated on: 2011-09-22 21:58:33 : 1316721513*/
App::import('Model', 'Estadistic');

class EstadisticTestCase extends CakeTestCase {
	var $fixtures = array('app.estadistic');

	function startTest() {
		$this->Estadistic =& ClassRegistry::init('Estadistic');
	}

	function endTest() {
		unset($this->Estadistic);
		ClassRegistry::flush();
	}

}
