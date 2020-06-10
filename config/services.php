<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, SparkPost and others. This file provides a sane default
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'facebook' => [
        'client_id' => '1722161394468319',
        'client_secret' => '9e72c8d2da501265e0fc17dd93a01c31',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],


    'google' => [
        'client_id' => '845370972204-onu0gbha2evshgjjklusrfetp5f38o79.apps.googleusercontent.com',
        'client_secret' => 'QBGDnSLjwAxtQ6BG3FaLGcXV',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],

    'twitter' => [
        'client_id' => 'WV6KBG25yBtWWK5B8Fr9d40Tw',
        'client_secret' => 'ZJ9X41YCAtqM4MdVPobjwftWAapS83ob9vvq4FYnpMHO3YEeO4',
        'redirect' => 'http://localhost:8000/auth/twitter/callback',
    ],

];
