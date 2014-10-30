<?php namespace Fisharebest\Localization;

/**
 * Class LocaleArTd
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleArTd extends LocaleAr {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryTd;
	}
}
