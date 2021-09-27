<?php

return [
    'oracle' => [
        'driver'        => 'oracle',
        'tns'           => env('DB_TNS', 'xe'),
        'host'          => env('DB_HOST', 'localhost'),
        'port'          => env('DB_PORT', '1521'),
        'database'      => env('DB_DATABASE', 'victor'),
        'username'      => env('DB_USERNAME', 'SYS'),
        'password'      => env('DB_PASSWORD', '1234'),
        'charset'       => env('DB_CHARSET', 'AL32UTF8'),
        'prefix'        => env('DB_PREFIX', ''),
        'prefix_schema' => env('DB_SCHEMA_PREFIX', ''),
        'edition'       => env('DB_EDITION', ''),
    ],
];
