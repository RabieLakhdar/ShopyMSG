<?php
App::uses('Revenue', 'Model');

/**
 * Revenue Test Case
 *
 */
class RevenueTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.revenue',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Revenue = ClassRegistry::init('Revenue');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Revenue);

		parent::tearDown();
	}

}
