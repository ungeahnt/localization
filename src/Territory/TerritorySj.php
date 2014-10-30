<?php namespace Fisharebest\Localization;

/**
 * Class Territory - Representation of the territory SJ - Svalbard and Jan Mayen.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class TerritorySj extends Territory {
	/** {@inheritdoc} */
	public function code() {
		return 'SJ';
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
