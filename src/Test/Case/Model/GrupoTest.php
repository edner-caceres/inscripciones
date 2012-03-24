<?php
/* Grupo Test cases generated on: 2012-03-24 09:56:43 : 1332579403*/
App::uses('Grupo', 'Model');

/**
 * Grupo Test Case
 *
 */
class GrupoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.grupo', 'app.curso', 'app.gestion', 'app.persona', 'app.cuenta', 'app.rol', 'app.inscripcion', 'app.devolucion');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Grupo = ClassRegistry::init('Grupo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Grupo);

		parent::tearDown();
	}

}
