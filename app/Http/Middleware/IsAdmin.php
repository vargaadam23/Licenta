<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user() &&  Auth::user()->tip == 2) {
             return $next($request);
        }

        return redirect('/')->with('error','Nu sunteti administrator sau distribuitor de asigurari!');
    }
}