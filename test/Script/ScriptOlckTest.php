<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptOlck class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptOlckTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptOlck;

		$this->assertSame('Olck', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('261', $script->number());
		$this->assertSame(array('᱐', '᱑', '᱒', '᱓', '᱔', '᱕', '᱖', '᱗', '᱘', '᱙'), $script->numerals());
		$this->assertSame('Ol_Chiki', $script->unicodeName());
	}
}
