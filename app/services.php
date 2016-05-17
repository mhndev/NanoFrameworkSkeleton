<?php


return [
    'router'=>[
        'class'=>\mhndev\NanoFramework\Router\Router::class
    ],

    'dispatcher'=>[
        'class'=>\mhndev\NanoFramework\Dispatcher\Dispatcher::class,
        'arguments' => ['@container']
    ],

    'http'=>[
        'class'=>\mhndev\NanoFramework\Http\Http::class
    ],

    'http-kernel'=>[
        'class'=>\mhndev\NanoFramework\Kernel\Http\Kernel::class,
        'arguments'=>['@router','@dispatcher','@container']
    ]
];
