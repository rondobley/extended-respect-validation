<?php
/*
 * This file is part of Rondobley/ExtendedRespectValidation.
 *
 * (c) Ronald Dobley <ron@rondobley.com>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */
use Rondobley\Validation\Rules\AsciiPrintable;

/**
 * @group  rule
 * @covers Rondobley\Validation\Rules\AsciiPrintable
 */
class AsciiPrintableTest extends PHPUnit_Framework_TestCase
{
    public function testValidateTrue()
    {
        $rule = new AsciiPrintable;
        $this->assertTrue($rule->validate('I have ASCII printable chars: #$%^'));
        //spcace is a printable character char
        $this->assertTrue($rule->validate(' '));
        $this->assertFalse($rule->validate("\n\t"));
        // has ascii and non-ascii characters
        $this->assertFalse($rule->validate('Iñtërnâtiônàlizætiøn'));
        // has only non-ascii characters
        $this->assertFalse($rule->validate('ñëâôàæø'));
    }
}
