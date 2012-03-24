<?php
/* Rol Test cases generated on: 2012-03-24 09:04:42 : 1332576282*/
App::uses('Rol', 'Model');

/**
 * Rol Test Case
 *
 */
class RolTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.rol', 'app.cuenta');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Rol = ClassRegistry::init('Rol');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Rol);

		parent::tearDown();
	}

}
