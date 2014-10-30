<?php namespace Fisharebest\Localization;

/**
 * Class LocaleEnBe
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEnBe extends LocaleEn {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryBe;
	}
}
