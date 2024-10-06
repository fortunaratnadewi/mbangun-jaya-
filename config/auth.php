<?php

return [


    //Authentication Defaults
    'defaults' => [
        'guard' => env('AUTH_GUARD', 'web'),
        'passwords' => env('AUTH_PASSWORD_BROKER', 'users'),
    ],


    //Authentication Guards
    'guards' => [

        //untuk web 
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],

        //untuk customer 
        'customer' => [
        'driver' => 'session',
        'provider' => 'customers',
    ],


    // Providers
    'providers' => [

        //untuk user 
        'users' => [
            'driver' => 'eloquent',
            'model' => env('AUTH_MODEL', App\Models\User::class),
        ],

        // untuk customer
        'customers' => [
        'driver' => 'eloquent',
        'model' => App\Models\Customer::class, // Mengacu pada model Customer
    ],
    ],
   
    //Resetting Passwords
    // 'passwords' => [
    //     'users' => [
    //         'provider' => 'users',
    //         'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
    //         'expire' => 60,
    //         'throttle' => 60,
    //     ],
    // ],

    //Password Confirmation Timeout

    // 'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];
