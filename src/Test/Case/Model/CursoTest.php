<?php
/* Curso Test cases generated on: 2012-03-24 12:49:04 : 1332589744*/
App::uses('Curso', 'Model');

/**
 * Curso Test Case
 *
 */
class CursoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.curso', 'app.descripcion', 'app.grupo', 'app.gestion', 'app.persona', 'app.cuenta', 'app.rol', 'app.inscripcion', 'app.devolucion', 'app.tema');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Curso = ClassRegistry::init('Curso');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Curso);

		parent::tearDown();
	}

}
