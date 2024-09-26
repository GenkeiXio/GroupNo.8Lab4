<?php

namespace App\Http\Kernel;

protected $middleware = [
    \App\Http\Middleware\LogRequests::class,
];

protected $routeMiddleware = [
    'checkAge' => \App\Http\Middleware\CheckAge::class,
];
