<?php
/**
 * Pavel Orlov <orlandop@rambler.ru>
 *
 * @link http://github.com/orlandost for the source repository
 */

namespace Orlandost\NumberFormatHelper\View\Helper;

use Zend\View\Helper\AbstractHelper;

/**
 * Class NumberFormat
 * This helper format float number
 * @package Orlandost\NumberFormatHelper\View\Helper
 */
class NumberFormat extends AbstractHelper
{
    /**
     * @param float  $number
     * @param int    $decimals
     * @param string $dec_point
     * @param string $thousands_sep
     * @return string
     */
    public function __invoke($number = NULL, $decimals = 0 , $dec_point = "." , $thousands_sep = " ")
    {
        if (!$number || !is_float($number)){
            if (!$number = (float) $number)
                return '';
        } 
        
        return trim(number_format( $number, $decimals, $dec_point, $thousands_sep));
    }
}
