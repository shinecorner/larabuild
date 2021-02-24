<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PropertyMiddleware
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
        echo "Property specific line print";
        return $next($request);
    }
}
