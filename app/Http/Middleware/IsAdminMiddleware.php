<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class IsAdminMiddleware
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

        if (Auth::user()->role == 0)
        { 
            return redirect('/');
        }
        elseif (Auth::user()->role == 2)
        {
            return redirect('charity');
        }
        else
           return $next($request);
    }
}
