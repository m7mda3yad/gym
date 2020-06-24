<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class Check
{


    public function handle($request, Closure $next)
    {
           if(Auth::guard('member')->check()) 
                return $next($request);
               return redirect('/home');    
    }
}
