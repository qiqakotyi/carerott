<?php
App::uses('FriendStatus', 'Model');

/**
 * FriendStatus Test Case
 *
 */
class FriendStatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.friend_status',
		'app.friend'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FriendStatus = ClassRegistry::init('FriendStatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FriendStatus);

		parent::tearDown();
	}

}
