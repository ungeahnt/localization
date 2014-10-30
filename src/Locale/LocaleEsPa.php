<?php namespace Fisharebest\Localization;

/**
 * Class LocaleEsPa
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEsPa extends LocaleEs {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryPa;
	}
}
