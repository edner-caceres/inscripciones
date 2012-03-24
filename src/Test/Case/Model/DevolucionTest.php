<?php
/* Devolucion Test cases generated on: 2012-03-24 10:02:59 : 1332579779*/
App::uses('Devolucion', 'Model');

/**
 * Devolucion Test Case
 *
 */
class DevolucionTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.devolucion', 'app.inscripcion', 'app.cuenta', 'app.rol', 'app.persona', 'app.grupo', 'app.curso', 'app.descripcion', 'app.tema', 'app.gestion');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Devolucion = ClassRegistry::init('Devolucion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Devolucion);

		parent::tearDown();
	}

}
