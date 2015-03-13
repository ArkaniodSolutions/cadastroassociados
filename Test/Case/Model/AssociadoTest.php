<?php
App::uses('Associado', 'Model');

/**
 * Associado Test Case
 *
 */
class AssociadoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.associado',
		'app.cargo',
		'app.area',
		'app.compra'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Associado = ClassRegistry::init('Associado');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Associado);

		parent::tearDown();
	}

}
