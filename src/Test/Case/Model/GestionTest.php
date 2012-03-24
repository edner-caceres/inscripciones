<?php
/* Gestion Test cases generated on: 2012-03-24 09:31:12 : 1332577872*/
App::uses('Gestion', 'Model');

/**
 * Gestion Test Case
 *
 */
class GestionTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.gestion', 'app.grupo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Gestion = ClassRegistry::init('Gestion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Gestion);

		parent::tearDown();
	}

}
