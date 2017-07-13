<?php
/**
 * Pavel Orlov <orlandop@rambler.ru>
 *
 * @link http://github.com/orlandost for the source repository
 */

namespace Orlandost\NumberFormatHelper;

/**
 * Class Module
 * @package Orlandost\NumberFormatHelper
 */
class Module
{
    /**
     * @return mixed
     */
    public function getConfig()
    {
        return include dirname(__DIR__) . '/config/module.config.php';
    }
}
