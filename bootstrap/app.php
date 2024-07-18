<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->redirectGuestsTo(function(Request $request) {
            session()->flash('mensaje', 'Tenés que iniciar sesión para acceder a este contenido.');
            session()->flash('feedback.type', 'danger');
            return route('auth.loginForm');
        });
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
