<?php

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        $app['config']->set('view.paths', [__DIR__.'/stubs/views']);

        return [\Brayniverse\LaravelRouteViewHelper\ServiceProvider::class];
    }
}
