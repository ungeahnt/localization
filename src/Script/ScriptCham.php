<?php namespace Fisharebest\Localization;

/**
 * Class ScriptCham - Representation of the Cham script.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptCham extends Script {
	/** {@inheritdoc} */
	public function code() {
		return 'Cham';
	}

	/** {@inheritdoc} */
	public function digits() {
		return array(
			'0' => '꩐',
			'1' => '꩑',
			'2' => '꩒',
			'3' => '꩓',
			'4' => '꩔',
			'5' => '꩕',
			'6' => '꩖',
			'7' => '꩗',
			'8' => '꩘',
			'9' => '꩙',
		);
	}

	/** {@inheritdoc} */
	public function number() {
		return '358';
	}

	/** {@inheritdoc} */
	public function unicodeName() {
		return 'Cham';
	}
}
