<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageJv;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryId;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleKo class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleJvLatnTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleJvLatn;

		$this->assertEquals(new LanguageJv, $locale->language());
		$this->assertEquals(new PluralRule0, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryId, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('jv_ID@latin', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('Basa Jawa', $locale->endonym());
		$this->assertSame('lang="jv-Latn"', $locale->htmlAttributes());
		$this->assertSame('jv-Latn', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12,345,678.09', $locale->number(12345678.09));
		$this->assertSame('1,234.56%', $locale->percent(12.3456));
	}
}