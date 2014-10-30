<?php namespace Fisharebest\Localization;

/**
 * Class ScriptDeva - Representation of the Devanagari script.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptDeva extends Script {
	/** {@inheritdoc} */
	public function code() {
		return 'Deva';
	}

	/** {@inheritdoc} */
	public function digits() {
		return array(
			'0' => '०',
			'1' => '१',
			'2' => '२',
			'3' => '३',
			'4' => '४',
			'5' => '५',
			'6' => '६',
			'7' => '७',
			'8' => '८',
			'9' => '९',
		);
	}

	/** {@inheritdoc} */
	public function number() {
		return '315';
	}

	/** {@inheritdoc} */
	public function unicodeName() {
		return 'Devanagari';
	}
}
