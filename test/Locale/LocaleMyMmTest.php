<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleMyMm class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleMyMmTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleMyMm;

		$this->assertEquals(new LanguageMy, $locale->language());
		$this->assertEquals(new ScriptMymr, $locale->script());
		$this->assertEquals(new TerritoryMm, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('my_MM', $locale->code());
		$this->assertSame('my', $locale->languageTag());
		$this->assertSame('၀၁၂၃၄၅၆၇၈၉', $locale->convertDigits('0123456789'));
	}
}
