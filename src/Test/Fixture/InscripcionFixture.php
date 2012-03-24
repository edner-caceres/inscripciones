<?php
/* Inscripcion Fixture generated on: 2012-03-24 12:46:20 : 1332589580 */

/**
 * InscripcionFixture
 *
 */
class InscripcionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'cuenta_id' => array('type' => 'integer', 'null' => false),
		'grupo_id' => array('type' => 'integer', 'null' => true),
		'persona_id' => array('type' => 'integer', 'null' => true),
		'fecha_inscripcion' => array('type' => 'date', 'null' => true),
		'observaciones' => array('type' => 'string', 'null' => true),
		'curso_id' => array('type' => 'integer', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id'), 'inscripciones_pk' => array('unique' => true, 'column' => 'id'), 'inscribio_fk' => array('unique' => false, 'column' => 'cuenta_id'), 'se_inscribe_fk' => array('unique' => false, 'column' => 'persona_id')),
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
			'cuenta_id' => 1,
			'grupo_id' => 1,
			'persona_id' => 1,
			'fecha_inscripcion' => '2012-03-24',
			'observaciones' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 1
		),
	);
}
