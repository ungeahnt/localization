<?php namespace Fisharebest\Localization;

/**
 * Class LocaleDsb - Lower Sorbian
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleDsb extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'dolnoserbšćina';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'DOLNOSERBSCINA';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageDsb;
	}

	/** {@inheritdoc} */
	public function numberSymbols() {
		return array(
			self::GROUP   => self::DOT,
			self::DECIMAL => self::COMMA,
		);
	}

	/** {@inheritdoc} */
	protected function percentFormat() {
		return '%s' . self::NBSP . self::PERCENT;
	}
}
