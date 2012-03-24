<?php
/* Descripcion Fixture generated on: 2012-03-24 09:52:22 : 1332579142 */

/**
 * DescripcionFixture
 *
 */
class DescripcionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'curso_id' => array('type' => 'integer', 'null' => false),
		'descripcion_general' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'afiche' => array('type' => 'string', 'null' => true, 'length' => 1024),
		'banner' => array('type' => 'string', 'null' => true, 'length' => 512),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id'), 'tiene_descripcion_fk' => array('unique' => false, 'column' => 'curso_id')),
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
			'descripcion_general' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'afiche' => 'Lorem ipsum dolor sit amet',
			'banner' => 'Lorem ipsum dolor sit amet'
		),
	);
}
