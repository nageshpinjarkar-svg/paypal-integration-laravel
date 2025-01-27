<?php

namespace Proxylyx\PayPal\Providers;

/*
 * Class PayPalServiceProvider
 * @package Proxylyx\PayPal
 */

use Illuminate\Support\ServiceProvider;
use Proxylyx\PayPal\Services\AdaptivePayments;
use Proxylyx\PayPal\Services\ExpressCheckout;

class PayPalServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Publish config files
        $this->publishes([
            __DIR__.'/../../config/config.php' => config_path('paypal.php'),
        ]);

        // Publish Lang Files
        $this->loadTranslationsFrom(__DIR__.'/../../lang', 'paypal');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerPayPal();

        $this->mergeConfig();
    }

    /**
     * Register the application bindings.
     *
     * @return void
     */
    private function registerPayPal()
    {
        $this->app->singleton('express_checkout', function () {
            return new ExpressCheckout();
        });

        $this->app->singleton('adaptive_payments', function () {
            return new AdaptivePayments();
        });
    }

    /**
     * Merges user's and paypal's configs.
     *
     * @return void
     */
    private function mergeConfig()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/config.php',
            'paypal'
        );
    }
}
