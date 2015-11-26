<?php
App::uses('TopicsStatus', 'Model');

/**
 * TopicsStatus Test Case
 *
 */
class TopicsStatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.topics_status'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TopicsStatus = ClassRegistry::init('TopicsStatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TopicsStatus);

		parent::tearDown();
	}

}
