<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdminMiddleware
{ 
    public function handle(Request $request, Closure $next)
    {
        if (session()->get('level') !== 2) {
            abort(404);
        }
        return $next($request);
    }
}
