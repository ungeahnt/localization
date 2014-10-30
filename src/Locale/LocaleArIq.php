<?php namespace Fisharebest\Localization;

/**
 * Class LocaleArIq
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleArIq extends LocaleAr {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryIq;
	}
}
