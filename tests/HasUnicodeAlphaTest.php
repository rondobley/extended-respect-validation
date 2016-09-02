<?php
/*
 * This file is part of Rondobley/ExtendedRespectValidation.
 *
 * (c) Ronald Dobley <ron@rondobley.com>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */
use Rondobley\Validation\Rules\HasUnicodeAlpha;

/**
 * @group  rule
 * @covers Rondobley\Validation\Rules\HasUnicodeAlpha
 */
class HasUnicodeAlphaTest extends PHPUnit_Framework_TestCase
{

    public function testValidateTrue()
    {
        $rule = new HasUnicodeAlpha;
        $this->assertTrue($rule->validate('I have alpha'));
        $this->assertFalse($rule->validate('123456'));
        // has ascii and non-ascii
        $this->assertTrue($rule->validate('Iñtërnâtiônàlizætiøn'));
        // has only non-ascii lowercase characters
        $this->assertTrue($rule->validate('ñëâôàæø'));
        // has only uppercase non-ascii uppercase characters
        $this->assertTrue($rule->validate('ÛÕÐÛÝ'));
        // has only special characters
        $this->assertFalse($rule->validate('#$%*'));
    }
}
