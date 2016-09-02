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

class HasSpecialChar extends AbstractRule
{

    /**
     * The byte values of allowed special characters
     *
     * @var array
     */
    public static $allowedSpecialCharBytes = array(
        32, 33, 34, 35, 36, 37, 38, 39,
        40, 41, 42, 43, 44, 45, 46, 47,
        58, 59,
        60, 61, 62, 63, 64,
        91, 92, 93, 94, 95, 96,
        123, 124, 125, 126
    );

    /**
     * Validate
     *
     * @param string $input
     * @return boolean
     */
    public function validate($input)
    {
        // Get the bytes vals for all of the chars
        $charsBytes = count_chars($input, 1);
        // The byte vals are set as keys, we just want the key values
        $charsBytesKeys = array_keys($charsBytes);
        // Compare the values of the SpecialChars array to our values
        // If they intersect we have a SpecialChar in the password
        return (bool) array_intersect(self::$allowedSpecialCharBytes, $charsBytesKeys);
    }
}
