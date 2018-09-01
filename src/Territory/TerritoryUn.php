<?php namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory UN - United Nations.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class TerritoryUn extends AbstractTerritory implements TerritoryInterface {
	public function code() {
		return 'UN';
	}
}