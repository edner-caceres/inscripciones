<?php
/* Inscripcion Test cases generated on: 2012-03-24 12:46:20 : 1332589580*/
App::uses('Inscripcion', 'Model');

/**
 * Inscripcion Test Case
 *
 */
class InscripcionTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.inscripcion', 'app.cuenta', 'app.rol', 'app.persona', 'app.grupo', 'app.curso', 'app.descripcion', 'app.tema', 'app.gestion', 'app.devolucion');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Inscripcion = ClassRegistry::init('Inscripcion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Inscripcion);

		parent::tearDown();
	}

}
