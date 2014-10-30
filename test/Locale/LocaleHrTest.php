<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleHr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleHrTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleHr;

		$this->assertEquals(new LanguageHr, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryHr, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('croatian_ci', $locale->collation());
		$this->assertSame('hrvatski', $locale->endonym());
		$this->assertSame('hr_HR', $locale->code());
		$this->assertSame('hr', $locale->languageTag());
		$this->assertSame('0123456789', $locale->convertDigits('0123456789'));
	}
}
