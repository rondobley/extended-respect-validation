<?php
/*
 * This file is part of Rondobley/ExtendedRespectValidation.
 *
 * (c) Ronald Dobley <ron@rondobley.com>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

namespace Rondobley\Validation\Exceptions;

use Respect\Validation\Exceptions\ValidationException;

class HasAlphaException extends ValidationException
{
    public static $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '{{name}} must contain at least one letter (a-z or A-Z)',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '{{name}} must not contain any letters (a-z or A-Z)',
        ],
    ];
}
