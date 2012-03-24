<?php
/* Grupo Fixture generated on: 2012-03-24 09:56:43 : 1332579403 */

/**
 * GrupoFixture
 *
 */
class GrupoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'curso_id' => array('type' => 'integer', 'null' => true),
		'gestion_id' => array('type' => 'integer', 'null' => false),
		'persona_id' => array('type' => 'integer', 'null' => false),
		'nombre_grupo' => array('type' => 'string', 'null' => true, 'length' => 10),
		'hora_inicio' => array('type' => 'time', 'null' => true),
		'hora_fin' => array('type' => 'time', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id'), 'dictado_en_al_gestion_fk' => array('unique' => false, 'column' => 'gestion_id'), 'instructor_fk' => array('unique' => false, 'column' => 'persona_id'), 'tiene_grupos_fk' => array('unique' => false, 'column' => 'curso_id')),
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
			'gestion_id' => 1,
			'persona_id' => 1,
			'nombre_grupo' => 'Lorem ip',
			'hora_inicio' => '09:56:43',
			'hora_fin' => '09:56:43'
		),
	);
}
