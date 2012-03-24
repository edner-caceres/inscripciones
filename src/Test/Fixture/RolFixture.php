<?php
/* Rol Fixture generated on: 2012-03-24 09:04:42 : 1332576282 */

/**
 * RolFixture
 *
 */
class RolFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'nombre_rol' => array('type' => 'string', 'null' => true, 'length' => 20),
		'descripcion_rol' => array('type' => 'string', 'null' => true),
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
			'nombre_rol' => 'Lorem ipsum dolor ',
			'descripcion_rol' => 'Lorem ipsum dolor sit amet'
		),
	);
}
