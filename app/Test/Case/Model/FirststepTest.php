<?php
App::uses('Firststep', 'Model');

/**
 * Firststep Test Case
 *
 */
class FirststepTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.firststep',
		'app.user',
		'app.revenue',
		'app.about',
		'app.role'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Firststep = ClassRegistry::init('Firststep');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Firststep);

		parent::tearDown();
	}

}
