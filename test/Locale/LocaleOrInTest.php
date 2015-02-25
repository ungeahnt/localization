<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleOrIn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleOrInTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleOrIn;

		$this->assertEquals(new LanguageOr, $locale->language());
		$this->assertEquals(new ScriptOrya, $locale->script());
		$this->assertEquals(new TerritoryIn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('or_IN', $locale->code());
		$this->assertSame('or', $locale->languageTag());
		$this->assertSame('୦୧୨୩୪୫୬୭୮୯', $locale->digits('0123456789'));
		$this->assertSame('୧,୨୩,୪୫,୬୭୮.୦୯', $locale->number(12345678.09));
		$this->assertSame('lang="or"', $locale->htmlAttributes());
		$this->assertSame('-୧୨୩', $locale->number(-123));
	}
}
