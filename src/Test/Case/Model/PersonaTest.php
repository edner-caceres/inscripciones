<?php
/* Persona Test cases generated on: 2012-03-24 09:23:17 : 1332577397*/
App::uses('Persona', 'Model');

/**
 * Persona Test Case
 *
 */
class PersonaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.persona', 'app.cuenta', 'app.inscripcion', 'app.grupo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Persona = ClassRegistry::init('Persona');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Persona);

		parent::tearDown();
	}

}
