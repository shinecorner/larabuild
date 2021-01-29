<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        echo "this line will print every page";
        return $next($request);
    }
}
