<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
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
        $roles = $this->getRequiredRoleRoute($request->route());

        if($request->user()->hasRole($roles)|| !$roles)
        {
            return $next($request);
        }
       return redirect('permission');
   }
   private function getRequiredRoleForRoute($route)
   {
       $actions = $route->getAction();
       return isset($actions['roles']) ? $actions['roles'] : null;
   }
}
