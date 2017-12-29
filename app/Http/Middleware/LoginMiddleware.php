<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class LoginMiddleware
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
        if(Auth::check())
        {
            if(Auth::user())
                return $next($request);
            else
                return redirect('/login');
        }
        else{
            return redirect('/login');
        }
    }
}
