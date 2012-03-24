<?php
/* Devolucion Fixture generated on: 2012-03-24 10:02:59 : 1332579779 */

/**
 * DevolucionFixture
 *
 */
class DevolucionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'inscripcion_id' => array('type' => 'integer', 'null' => false),
		'fecha_devolucion' => array('type' => 'date', 'null' => true),
		'motivo_devolucion' => array('type' => 'string', 'null' => true),
		'comprobante_devolucion' => array('type' => 'string', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id'), 'devoliciones_pk' => array('unique' => true, 'column' => 'id'), 'es_devuelto_fk' => array('unique' => false, 'column' => 'inscripcion_id')),
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
			'inscripcion_id' => 1,
			'fecha_devolucion' => '2012-03-24',
			'motivo_devolucion' => 'Lorem ipsum dolor sit amet',
			'comprobante_devolucion' => 'Lorem ipsum dolor sit amet'
		),
	);
}
