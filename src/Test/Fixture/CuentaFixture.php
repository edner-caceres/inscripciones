<?php
/* Cuenta Fixture generated on: 2012-03-24 09:54:45 : 1332579285 */

/**
 * CuentaFixture
 *
 */
class CuentaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'rol_id' => array('type' => 'integer', 'null' => false),
		'persona_id' => array('type' => 'integer', 'null' => false),
		'nombre_de_usuario' => array('type' => 'string', 'null' => false, 'length' => 20),
		'password' => array('type' => 'string', 'null' => false, 'length' => 40),
		'fecha_inicio_validez' => array('type' => 'date', 'null' => false, 'default' => 'now()'),
		'fecha_fin_validez' => array('type' => 'date', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id'), 'puede_tener_cuenta_fk' => array('unique' => false, 'column' => 'persona_id'), 'rol_de_la_cuenta_fk' => array('unique' => false, 'column' => 'rol_id')),
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
			'rol_id' => 1,
			'persona_id' => 1,
			'nombre_de_usuario' => 'Lorem ipsum dolor ',
			'password' => 'Lorem ipsum dolor sit amet',
			'fecha_inicio_validez' => '2012-03-24',
			'fecha_fin_validez' => '2012-03-24'
		),
	);
}
