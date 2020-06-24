<?php
//php artisan config:clear
return [
    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],
    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    'member' => [
            'driver' => 'session',
            'provider' => 'members',
        ],

        'trainer' => [
            'driver' => 'session',
            'provider' => 'trainers',
        ],

    
        'api' => [
            'driver' => 'jwt',
            'provider' => 'members',
            'hash' => false,
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],
    'members' => [
            'driver' => 'eloquent',
            'model' => App\Member::class,
        ],
    'trainers' => [
            'driver' => 'eloquent',
            'model' => App\Trainer::class,
        ],
    ],
    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'trainers' => [
            'provider' => 'trainers',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'members' => [
            'provider' => 'members',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],
    'password_timeout' => 10800,
];