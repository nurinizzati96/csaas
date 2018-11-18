<?php
App::uses('Permohonan', 'Model');

/**
 * Permohonan Test Case
 */
class PermohonanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.permohonan',
		'app.persatuan'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Permohonan = ClassRegistry::init('Permohonan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Permohonan);

		parent::tearDown();
	}

}
