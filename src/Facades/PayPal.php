<?php

namespace Proxylyx\PayPal\Facades;

/*
 * Class Facade
 * @package Proxylyx\PayPal\Facades
 * @see Proxylyx\PayPal\ExpressCheckout
 */

use Illuminate\Support\Facades\Facade;

class PayPal extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Proxylyx\PayPal\PayPalFacadeAccessor';
    }
}
