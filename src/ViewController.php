<?php

namespace Brayniverse\LaravelRouteViewHelper;

use Illuminate\Support\Facades\View;

class ViewController
{
    /**
     * Handle the view rendering.
     *
     * @param  string  $view
     * @return \Illuminate\Http\Response
     */
    public function handle($view)
    {
        return View::make($view);
    }

    /**
     * Extract the view name from the route and call the handler.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return \Illuminate\Http\Response
     */
    public function callAction($method, $parameters)
    {
        return $this->handle($parameters['view']);
    }
}
