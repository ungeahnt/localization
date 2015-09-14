<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptTeng class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptTengTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptTeng;

		$this->assertSame('Teng', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('290', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertNull($script->unicodeName());
	}
}
