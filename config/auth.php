<?php
return [
    'defaults' => [
        'guard' => 'utilisateurs_apk',
        'passwords' => 'utilisateurs_apk',
    ],

    'guards' => [
        'utilisateurs_apk' => [
            'driver' => 'session',
            'provider' => 'utilisateurs_apk',
        ],
    ],

    'providers' => [
        'utilisateurs_apk' => [
            'driver' => 'eloquent',
            'model' => App\Models\Utilisateur::class,
        ],
    ],
];
