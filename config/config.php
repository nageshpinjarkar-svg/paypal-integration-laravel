<?php
/**
 * PayPal Setting & API Credentials.
 */

return [
    'mode'    => env('PAYPAL_ENV', 'sandbox'),
    'sandbox' => [
        'username'    => env('PAYPAL_API_USERNAME', ''),
        'password'    => env('PAYPAL_API_PASSWORD', ''),
        'secret'      => env('PAYPAL_API_SECRET', ''),
        'certificate' => env('PAYPAL_API_CERTIFICATE', ''),
        'app_id'      => '',
    ],
    'live' => [
        'username'    => env('PAYPAL_API_USERNAME', ''),
        'password'    => env('PAYPAL_API_PASSWORD', ''),
        'secret'      => env('PAYPAL_API_SECRET', ''),
        'certificate' => env('PAYPAL_API_CERTIFICATE', ''),
        'app_id'      => '',
    ],

    'payment_action' => 'Sale',
    'currency'       => 'USD',
    'notify_url'     => '',
    'locale'         => '',
];
