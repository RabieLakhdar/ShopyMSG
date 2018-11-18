<?php
App::uses('DataUser', 'Model');

/**
 * DataUser Test Case
 *
 */
class DataUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.data_user',
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
		$this->DataUser = ClassRegistry::init('DataUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DataUser);

		parent::tearDown();
	}

}
