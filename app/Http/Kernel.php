<?php

namespace LaraCall\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use LaraCall\Http\Middleware\God;
use LaraCall\Http\Middleware\Subscriber;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \LaraCall\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        ],

        'csrf' => [
            \LaraCall\Http\Middleware\VerifyCsrfToken::class,
        ],

        'api' => [
//            'throttle:60,1',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth'       => \LaraCall\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'can'        => \Illuminate\Foundation\Http\Middleware\Authorize::class,
        'guest'      => \LaraCall\Http\Middleware\RedirectIfAuthenticated::class,
        'throttle'   => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'subscriber' => Subscriber::class,
        'god'        => God::class,
    ];
}
