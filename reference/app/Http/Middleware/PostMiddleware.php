<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;

class PostMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        echo "Post specific line print";
        echo "<br>";
        return $next($request);
    }
}
