<?php namespace Fisharebest\Localization;

/**
 * Class ScriptArmi - Representation of the Imperial Aramaic script.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptArmi extends Script {
	/** {@inheritdoc} */
	public function code() {
		return 'Armi';
	}

	/** {@inheritdoc} */
	public function number() {
		return '124';
	}

	/** {@inheritdoc} */
	public function unicodeName() {
		return 'Imperial_Aramaic';
	}
}
