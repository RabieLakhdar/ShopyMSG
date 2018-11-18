<?php
App::uses('UserPage', 'Model');

/**
 * UserPage Test Case
 *
 */
class UserPageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user_page',
		'app.user',
		'app.revenue',
		'app.about',
		'app.role',
		'app.page'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UserPage = ClassRegistry::init('UserPage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserPage);

		parent::tearDown();
	}

}
