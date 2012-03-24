<?php
/* Descripcion Test cases generated on: 2012-03-24 09:52:22 : 1332579142*/
App::uses('Descripcion', 'Model');

/**
 * Descripcion Test Case
 *
 */
class DescripcionTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.descripcion', 'app.curso');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Descripcion = ClassRegistry::init('Descripcion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Descripcion);

		parent::tearDown();
	}

}
