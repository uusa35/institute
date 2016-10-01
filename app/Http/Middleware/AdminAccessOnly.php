<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class
AdminAccessOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        abort_if(!Auth::user()->can('isAdmin'),'404','Admin zone only !!!');

        return $next($request);
    }
}
