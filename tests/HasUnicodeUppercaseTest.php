<?php
/*
 * This file is part of Rondobley/ExtendedRespectValidation.
 *
 * (c) Ronald Dobley <ron@rondobley.com>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */
use Rondobley\Validation\Rules\HasUnicodeUppercase;

/**
 * @group  rule
 * @covers Rondobley\Validation\Rules\HasUnicodeUppercase
 */
class HasUnicodeUppercaseTest extends PHPUnit_Framework_TestCase
{

    public function testValidateTrue()
    {
        $rule = new HasUnicodeUppercase;
        $this->assertTrue($rule->validate('I have UPPERCASE alpha'));
        $this->assertFalse($rule->validate('no uppercase'));
        //$this->assertFalse($rule->validate('123456'));
        // has ascii and non-ascii
        $this->assertTrue($rule->validate('IñtËrnâtiônàlizætiøn'));
        // has only non-ascii lowercase characters
        $this->assertFalse($rule->validate('ñëâôàæø'));
        // has only special characters
        $this->assertFalse($rule->validate('#$%*'));
        // has only uppercase non-ascii characters
        $this->assertTrue($rule->validate('ÛÕÐÛÝ'));
    }
}
