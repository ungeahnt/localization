<?php namespace Fisharebest\Localization\Territory;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the TerritoryCd class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class TerritoryCdTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$territory = new TerritoryCd;

		$this->assertSame('CD', $territory->code());
		$this->assertSame(1, $territory->firstDay());
		$this->assertSame(6, $territory->weekendStart());
		$this->assertSame(0, $territory->weekendEnd());
		$this->assertSame('metric', $territory->measurementSystem());
		$this->assertSame('A4', $territory->paperSize());
	}
}
