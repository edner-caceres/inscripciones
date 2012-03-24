<?php
/* Cuenta Test cases generated on: 2012-03-24 09:54:45 : 1332579285*/
App::uses('Cuenta', 'Model');

/**
 * Cuenta Test Case
 *
 */
class CuentaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.cuenta', 'app.rol', 'app.persona', 'app.inscripcion', 'app.grupo', 'app.devolucion');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Cuenta = ClassRegistry::init('Cuenta');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cuenta);

		parent::tearDown();
	}

}
