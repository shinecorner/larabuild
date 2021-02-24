<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

class CheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
//    public function handle(Request $request, Closure $next, $role, $permission)
    public function handle(Request $request, Closure $next)
    {
//        exit("Middleware");
        echo Route::currentRouteAction();
        return $next($request);
    }
    public function terminate(Request $request, Response $response)
    {
        dump("terminate process");
    }
}
