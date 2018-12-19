<?php

namespace App\Http\Middleware;
use Illuminate\Http\Response;
use Closure;

class admin
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
        if($request->user() && $request->user()->Role_Id !=2)
        {
            return new Response(view('/home'));
        }
        return $next($request); 
    }
    
}
