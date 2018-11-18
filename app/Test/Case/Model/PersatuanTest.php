<?php
App::uses('Persatuan', 'Model');

/**
 * Persatuan Test Case
 */
class PersatuanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.persatuan',
		'app.permohonan'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Persatuan = ClassRegistry::init('Persatuan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Persatuan);

		parent::tearDown();
	}

}
