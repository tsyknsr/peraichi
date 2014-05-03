<?php
App::uses('TemplateCategory', 'Model');

/**
 * TemplateCategory Test Case
 *
 */
class TemplateCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.template_category',
		'app.template'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TemplateCategory = ClassRegistry::init('TemplateCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TemplateCategory);

		parent::tearDown();
	}

}
