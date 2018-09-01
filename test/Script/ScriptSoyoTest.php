<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptSoyo class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class ScriptSoyoTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$script = new ScriptSoyo;

		$this->assertSame('Soyo', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('329', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertSame('Soyombo', $script->unicodeName());
	}
}