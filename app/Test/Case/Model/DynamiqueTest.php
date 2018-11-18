<?php
App::uses('Dynamique', 'Model');

/**
 * Dynamique Test Case
 *
 */
class DynamiqueTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dynamique'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Dynamique = ClassRegistry::init('Dynamique');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dynamique);

		parent::tearDown();
	}

}
