<?php
/*
 * This file is part of Rondobley/ExtendedRespectValidation.
 *
 * (c) Ronald Dobley <ron@rondobley.com>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */
use Rondobley\Validation\Rules\HasSpecialChar;

/**
 * @group  rule
 * @covers Rondobley\Validation\Rules\HasSpecialChar
 */
class HasSpecialCharTest extends PHPUnit_Framework_TestCase
{

    public function testValidateTrue()
    {
        $rule = new HasSpecialChar;
        $this->assertTrue($rule->validate('I have special chars : #$%^'));
        //spcace is a special char
        $this->assertTrue($rule->validate(' '));
        $this->assertFalse($rule->validate('Ihavenospecialcharsjustlettersandnumbers123'));
        $this->assertFalse($rule->validate('123456'));
        // has ascii and non-ascii characters
        $this->assertFalse($rule->validate('Iñtërnâtiônàlizætiøn'));
        // has only non-ascii characters
        $this->assertFalse($rule->validate('ñëâôàæø'));
        // has only special characters
        $this->assertTrue($rule->validate('#$%*'));
    }
}
