<?php namespace Fisharebest\Localization;

/**
 * Class Territory - Representation of the territory ME - Montenegro.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class TerritoryMe extends Territory {
	/** {@inheritdoc} */
	public function code() {
		return 'ME';
	}

	/** {@inheritdoc} */
	public function decimalMark() {
		return ',';
	}

	/** {@inheritdoc} */
	public function digitsGroupSeparator() {
		return '.';
	}
}
