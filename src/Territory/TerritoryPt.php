<?php namespace Fisharebest\Localization;

/**
 * Class Territory - Representation of the territory PT - Portugal.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class TerritoryPt extends Territory {
	/** {@inheritdoc} */
	public function code() {
		return 'PT';
	}

	/** {@inheritdoc} */
	public function decimalMark() {
		return ',';
	}

	/** {@inheritdoc} */
	public function digitsGroupSeparator() {
		return self::NBSP;
	}
}
