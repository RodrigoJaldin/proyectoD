<?php

use App\Http\Middleware\CheckFavorito;
use App\Http\Middleware\CheckGeneroMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Auth;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->append(CheckGeneroMiddleware::class);
        $middleware->append(CheckFavorito::class);

   })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
