<?php
/* Persona Fixture generated on: 2012-03-24 09:23:17 : 1332577397 */

/**
 * PersonaFixture
 *
 */
class PersonaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'ci' => array('type' => 'integer', 'null' => true),
		'sis' => array('type' => 'integer', 'null' => true),
		'nombres' => array('type' => 'string', 'null' => true, 'length' => 30),
		'apellido_paterno' => array('type' => 'string', 'null' => true, 'length' => 30),
		'apellido_materno' => array('type' => 'string', 'null' => true, 'length' => 30),
		'telefono' => array('type' => 'integer', 'null' => true),
		'enail' => array('type' => 'string', 'null' => true, 'length' => 50),
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
			'ci' => 1,
			'sis' => 1,
			'nombres' => 'Lorem ipsum dolor sit amet',
			'apellido_paterno' => 'Lorem ipsum dolor sit amet',
			'apellido_materno' => 'Lorem ipsum dolor sit amet',
			'telefono' => 1,
			'enail' => 'Lorem ipsum dolor sit amet'
		),
	);
}
