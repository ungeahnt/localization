<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleEnPw class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnPwTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleEnPw;

		$this->assertEquals(new LanguageEn, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryPw, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('en_PW', $locale->code());
		$this->assertSame('en-PW', $locale->languageTag());
		$this->assertSame('0123456789', $locale->convertDigits('0123456789'));
	}
}
