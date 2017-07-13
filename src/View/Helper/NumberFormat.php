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
 * @package Orlandost\NumberFormatHelper\View\Helper
 */
class NumberFormat extends AbstractHelper
{
    /**
     * @param $number
     * @param $decimals
     * @param $$dec_point
     * @param $thousands_sep
     * @return string
     */
    public function __invoke(float $number, int $decimals = 2 , string $dec_point = "." , string $thousands_sep = " ")
    {
        return number_format( $number, $decimals, $dec_point, $thousands_sep );
    }
}
