<?php

namespace Brayniverse\LaravelRouteViewHelper;

use Illuminate\Support\Facades\Route;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        Route::macro('view', function ($url, $view) {
            return Route::get($url, '\Brayniverse\LaravelRouteViewHelper\ViewController@handle')
                ->defaults('view', $view);
        });
    }
}
