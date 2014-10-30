<?php namespace Fisharebest\Localization;

/**
 * Class LocaleEsPe
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEsPe extends LocaleEs {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryPe;
	}
}
