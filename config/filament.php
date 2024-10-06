<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Filament Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for Filament. You can set the path
    | to your SVG icons, theme settings, and other custom configurations here.
    |
    */

    'icons' => [
        'heroicons' => [
            'path' => base_path('resources/svg/heroicons'),
        ],
    ],

    'theme' => [
        'dark' => false,
        'custom' => [
            // Define custom styles
        ],
    ],
    'disks' => [
    'public' => [
        'driver' => 'local',
        'root' => storage_path('app/public'),
        'url' => env('APP_URL').'/storage',
        'visibility' => 'public',
       ],
    ],

    // Add other Filament configuration options here
];
