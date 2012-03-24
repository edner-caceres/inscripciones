<?php
/* Gestion Fixture generated on: 2012-03-24 09:31:12 : 1332577872 */

/**
 * GestionFixture
 *
 */
class GestionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'nombre_gestion' => array('type' => 'string', 'null' => true, 'length' => 7),
		'descripcion_gestion' => array('type' => 'string', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'nombre_gestion' => 'Lorem',
			'descripcion_gestion' => 'Lorem ipsum dolor sit amet'
		),
	);
}
