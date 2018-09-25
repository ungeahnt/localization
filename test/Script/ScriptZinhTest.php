<?php

namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptZinh class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class ScriptZinhTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptZinh();

        $this->assertSame('Zinh', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('994', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Inherited', $script->unicodeName());
    }
}
