<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptCher class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptCherTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptCher;

		$this->assertSame('Cher', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('445', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertSame('Cherokee', $script->unicodeName());
	}
}
