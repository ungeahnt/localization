<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBs;
use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryBa;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LocaleBsCyrl class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class LocaleBsCyrlTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleBsCyrl();

        $this->assertEquals(new LanguageBs(), $locale->language());
        $this->assertEquals(new PluralRule7(), $locale->pluralRule());
        $this->assertEquals(new ScriptCyrl(), $locale->script());
        $this->assertEquals(new TerritoryBa(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('bs_BA@cyrillic', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="bs-Cyrl"', $locale->htmlAttributes());
        $this->assertSame('bs-Cyrl', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
