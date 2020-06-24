<?php
namespace App\Http\Middleware;
use Closure;
class checkpasswoed
{
    public function handle($request, Closure $next)
    {

    if($request->api_password!==env('API_PASSWORD')){
   
        return response()->json(['message','error']);
            
    }
            return $next($request);
    }
}
