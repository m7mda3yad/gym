<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
class admin{
    public function handle($request, Closure $next){
              if(Auth::check()) 
                return $next($request);
               return redirect('/admin/login');    
 }
}
