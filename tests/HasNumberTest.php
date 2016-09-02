<?php
/*
 * This file is part of Rondobley/ExtendedRespectValidation.
 *
 * (c) Ronald Dobley <ron@rondobley.com>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */
use Rondobley\Validation\Rules\HasNumber;

/**
 * @group  rule
 * @covers Rondobley\Validation\Rules\HasNumber
 */
class HasNumberTest extends PHPUnit_Framework_TestCase
{

    public function testValidateTrue()
    {
        $rule = new HasNumber;
        $this->assertTrue($rule->validate('I have numbers: 123'));
        $this->assertTrue($rule->validate('123456'));
        // has ascii and non-ascii characters
        $this->assertFalse($rule->validate('Iñtërnâtiônàlizætiøn'));
        // has only non-ascii characters
        $this->assertFalse($rule->validate('ñëâôàæø'));
        // has only special characters
        $this->assertFalse($rule->validate('#$%*'));
        // has no numbers
        $this->assertFalse($rule->validate('No Numbers'));
    }
}
