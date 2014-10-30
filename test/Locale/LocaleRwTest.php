<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleRw class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleRwTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleRw;

		$this->assertEquals(new LanguageRw, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryRw, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('Kinyarwanda', $locale->endonym());
		$this->assertSame('rw_RW', $locale->code());
		$this->assertSame('rw', $locale->languageTag());
		$this->assertSame('0123456789', $locale->convertDigits('0123456789'));
	}
}
