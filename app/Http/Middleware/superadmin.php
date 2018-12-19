<?php

namespace App\Http\Middleware;
use Illuminate\Http\Response;
use Closure;

class superadmin
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
        if($request->user() && $request->user()->Role_Id !=1)
        {
            return new Response(view('/home'));
        }
        return $next($request);
    }
}
