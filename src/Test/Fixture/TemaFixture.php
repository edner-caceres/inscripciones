<?php
/* Tema Fixture generated on: 2012-03-24 10:02:02 : 1332579722 */

/**
 * TemaFixture
 *
 */
class TemaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'curso_id' => array('type' => 'integer', 'null' => false),
		'numero_tema' => array('type' => 'integer', 'null' => true),
		'nombre_tema' => array('type' => 'string', 'null' => true, 'length' => 100),
		'descripcion_tema' => array('type' => 'string', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id'), 'tiene_temas_fk' => array('unique' => false, 'column' => 'curso_id')),
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
			'curso_id' => 1,
			'numero_tema' => 1,
			'nombre_tema' => 'Lorem ipsum dolor sit amet',
			'descripcion_tema' => 'Lorem ipsum dolor sit amet'
		),
	);
}
