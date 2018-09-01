<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIn;

/**
 * Class LocaleCcpIn - Chakma
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license       GPLv3+
 */
class LocaleCcpIn extends LocaleCcp implements LocaleInterface {
    public function territory() {
        return new TerritoryIn;
    }
}