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

class AsciiPrintable extends AbstractRule
{

    /**
     * Validate
     *
     * @see http://en.wikipedia.org/wiki/ASCII#ASCII_printable_characters
     * @param string $input
     * @return boolean
     */
    public function validate($input)
    {
        // filter out the non-ascii printable characters
        $filteredInput = filter_var($input, FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
        // if the filtered input == the input, then the input only has ASCII printable characters
        if ($filteredInput == $input) {
            return true;
        }
        return false;
    }
}
