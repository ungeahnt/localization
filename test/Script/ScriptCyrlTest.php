<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptCyrl class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptCyrlTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptCyrl;

		$this->assertSame('Cyrl', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('220', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertSame('Cyrillic', $script->unicodeName());
	}
}
