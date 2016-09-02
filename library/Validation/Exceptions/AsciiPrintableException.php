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

class AsciiPrintableException extends ValidationException
{
    public static $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '{{name}} must only contain printable characters',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '{{name}} must only contain non-printable characters',
        ],
    ];

    /**
     *
     * @todo this is not working, I am not sure how they are throwing expections but they are not of this class
     */
    public function getInvalidChars()
    {
        $badChars = '';
        // get the password into an array
        $arrInput = str_split($this->params);
        // loop through each char and see if it is an allowed char
        foreach ($arrInput as $key => $val) {
            // we only care about chars above 126, as anything below 32 is a control char
            if (ord($val) > 126) {
                $badChars .= $val;
            }
        }
        return $badChars;
    }
}
