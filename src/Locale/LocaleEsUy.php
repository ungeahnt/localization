<?php namespace Fisharebest\Localization;

/**
 * Class LocaleEsUy
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEsUy extends LocaleEs {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryUy;
	}
}
