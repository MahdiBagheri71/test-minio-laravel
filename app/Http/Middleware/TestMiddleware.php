<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Psy\Exception\ThrowUpException;

class TestMiddleware
{

    public function handle(Request $request, Closure $next, string $p1 =null, string $p2=null)
    {
        if ($p1 && $p2){
            return abort(403,"{$p1} {$p2}");
        }
        return $next($request);
    }
}
