<?php namespace Fisharebest\Localization;

/**
 * Class LocaleFrSn
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleFrSn extends LocaleFr {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritorySn;
	}
}
