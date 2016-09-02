<?php
/*
 * This file is part of Rondobley/ExtendedRespectValidation.
 *
 * (c) Ronald Dobley <ron@rondobley.com>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

namespace Rondobley\Validation\Rules;

use Respect\Validation\Rules\AbstractRule;

class HasUnicodeLowercase extends AbstractRule
{

    /**
     * Validate
     *
     * @param string $input
     * @return boolean
     */
    public function validate($input)
    {
        return (bool) preg_match('~[\p{Ll}]~u', $input);
    }
}
