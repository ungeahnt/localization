<?php namespace Fisharebest\Localization;

/**
 * Class LocaleZhHansHk
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleZhHansHk extends LocaleZhHans {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryHk;
	}
}
