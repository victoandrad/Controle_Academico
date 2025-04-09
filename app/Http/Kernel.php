<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'student' => \App\Http\Middleware\EnsureUserIsStudent::class,
        'teacher' => \App\Http\Middleware\EnsureUserIsTeacher::class,
    ];
}
