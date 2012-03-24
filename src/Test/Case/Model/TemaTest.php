<?php
/* Tema Test cases generated on: 2012-03-24 10:02:02 : 1332579722*/
App::uses('Tema', 'Model');

/**
 * Tema Test Case
 *
 */
class TemaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.tema', 'app.curso', 'app.descripcion', 'app.grupo', 'app.gestion', 'app.persona', 'app.cuenta', 'app.rol', 'app.inscripcion', 'app.devolucion');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Tema = ClassRegistry::init('Tema');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tema);

		parent::tearDown();
	}

}
