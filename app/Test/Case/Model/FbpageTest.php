<?php
App::uses('Fbpage', 'Model');

/**
 * Fbpage Test Case
 *
 */
class FbpageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fbpage',
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
		$this->Fbpage = ClassRegistry::init('Fbpage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Fbpage);

		parent::tearDown();
	}

}
