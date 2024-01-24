<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Psy\Exception\ThrowUpException;

class TestMiddleware
{

    public function handle(Request $request, Closure $next, string $p1 , string $p2=null)
    {
        if ($p1==='Mahdi' && $p2 ==='Bagheri'){
            return abort(403);
        }
        return $next($request);
    }
}
