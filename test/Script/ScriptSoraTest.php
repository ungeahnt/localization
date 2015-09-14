<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptSora class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptSoraTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptSora;

		$this->assertSame('Sora', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('398', $script->number());
		$this->assertSame(array('𑃰', '𑃱', '𑃲', '𑃳', '𑃴', '𑃵', '𑃶', '𑃷', '𑃸', '𑃹'), $script->numerals());
		$this->assertSame('Sora_Sompeng', $script->unicodeName());
	}
}
