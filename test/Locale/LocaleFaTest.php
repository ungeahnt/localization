<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleFa class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleFaTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleFa;

		$this->assertEquals(new LanguageFa, $locale->language());
		$this->assertEquals(new ScriptArab, $locale->script());
		$this->assertEquals(new TerritoryIr, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('persian_ci', $locale->collation());
		$this->assertSame('فارسی', $locale->endonym());
		$this->assertSame('fa_IR', $locale->code());
		$this->assertSame('fa', $locale->languageTag());
		$this->assertSame('۰۱۲۳۴۵۶۷۸۹', $locale->convertDigits('0123456789'));
	}
}
