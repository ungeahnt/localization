<?php namespace Fisharebest\Localization;

/**
 * Class LocaleNlBq
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleNlBq extends LocaleNl {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryBq;
	}
}
