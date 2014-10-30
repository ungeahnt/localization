<?php namespace Fisharebest\Localization;

/**
 * Class LocaleRuKz
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleRuKz extends LocaleRu {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryKz;
	}
}
