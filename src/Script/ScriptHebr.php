<?php namespace Fisharebest\Localization;

/**
 * Class ScriptHebr - Representation of the Hebrew script.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptHebr extends Script {
	/** {@inheritdoc} */
	public function code() {
		return 'Hebr';
	}

	/** {@inheritdoc} */
	public function number() {
		return '125';
	}

	/** {@inheritdoc} */
	public function unicodeName() {
		return 'Hebrew';
	}
}
