<?php
/*
 * Author: WOLF
 * Name: app.php
 * Modified : lun., 3 juin 2024 21:08
 * Description: ...
 *
 * Copyright 2024 -[MR.WOLF]-[WS]-
 */

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withCommands(commands: [
        \App\Console\Commands\ClearStoreMediaCommand::class,
        \App\Console\Commands\StoreMediasCommand::class
    ])
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
