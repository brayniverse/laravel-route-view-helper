<?php

namespace Brayniverse\LaravelRouteViewHelper;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class ViewController extends Controller
{
    /**
     * Handle the view rendering.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function handle(Request $request)
    {
        return View::make($request->route('view'));
    }
}
