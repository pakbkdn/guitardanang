<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Toastr;
class AdminMiddleware
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
            if(Auth::user()->roles==1)
                return $next($request);
            else
                 Toastr::warning('Bạn không có chức năng này, liên hệ với admin để được cấp quyền', $title = null, $options = []);
                 return redirect()->route('ad-guitardn')->with('info','warning');
        }
        else{
            Toastr::warning('Bạn không có chức năng này, liên hệ với admin để được cấp quyền', $title = null, $options = []);
            return redirect()->route('ad-guitardn')->with('info','warning');
        }
    }
}
