<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleDzBt class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleDzBtTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleDzBt;

		$this->assertEquals(new LanguageDz, $locale->language());
		$this->assertEquals(new ScriptTibt, $locale->script());
		$this->assertEquals(new TerritoryBt, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('dz_BT', $locale->code());
		$this->assertSame('dz', $locale->languageTag());
		$this->assertSame('༠༡༢༣༤༥༦༧༨༩', $locale->convertDigits('0123456789'));
	}
}
