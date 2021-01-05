<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;
class Doctor
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
        if(Auth::User() && Auth::User()->occupation == 4)
    {
         return $next($request);
    }
     // return redirect('/home');
    
    }
}
