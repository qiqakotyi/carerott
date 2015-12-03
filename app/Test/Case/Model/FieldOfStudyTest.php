<?php
App::uses('FieldOfStudy', 'Model');

/**
 * FieldOfStudy Test Case
 *
 */
class FieldOfStudyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.field_of_study',
		'app.user',
		'app.user_types',
		'app.institutions'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FieldOfStudy = ClassRegistry::init('FieldOfStudy');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FieldOfStudy);

		parent::tearDown();
	}

}
