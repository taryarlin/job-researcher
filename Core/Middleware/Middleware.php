<?php

namespace Core\Middleware;

use Exception;

class Middleware
{
    // [
    //     'guest' => 'Core\Middleware\Guest',
    //     'auth' => 'Core\Middleware\Authenticated',
    // ]
    public const MAP = [
        'guest' => Guest::class,
        'auth' => Authenticated::class,
    ];

    // $key -> guest, auth
    public static function resolve($key)
    {
        if(!$key) {
            return;
        }

        $middleware = static::MAP[$key] ?? false;

        if(!$middleware) {
            throw new Exception("No matching middleware found for key '$key'");
        }

        (new $middleware)->handle();
    }
}
