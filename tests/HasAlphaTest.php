<?php
/*
 * This file is part of Rondobley/ExtendedRespectValidation.
 *
 * (c) Ronald Dobley <ron@rondobley.com>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */
use Rondobley\Validation\Rules\HasAlpha;

/**
 * @group  rule
 * @covers Rondobley\Validation\Rules\HasAlpha
 */
class HasAlphaTest extends PHPUnit_Framework_TestCase
{
    public function testValidateTrue()
    {
        $rule = new HasAlpha;
        $this->assertTrue($rule->validate('I have alpha'));
        $this->assertFalse($rule->validate('123456'));
        // has ascii and non-ascii characters
        $this->assertTrue($rule->validate('Iñtërnâtiônàlizætiøn'));
        // has only non-ascii characters
        $this->assertFalse($rule->validate('ñëâôàæø'));
        // has only special characters
        $this->assertFalse($rule->validate('#$%*'));
    }
}
