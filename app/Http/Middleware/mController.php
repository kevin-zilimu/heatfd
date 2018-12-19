<?php

namespace App\Http\Middleware;

use Closure;

class mController
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
        if(auth()->check() && $request->user()->Role_Id == 2){

            return redirect('adminPanel.index');
        }
        if(auth()->check() && $request->user()->Role_Id == 3){

            return redirect('cookPosts.posts.index');
        }
        if(auth()->check() && $request->user()->Role_Id == 4){

            return redirect('home');
        }
        if(auth()->check() && $request->user()->Role_Id == 5){

            return redirect('home');
        }
        if(auth()->check() && $request->user()->Role_Id == 1){

            return redirect('home');
        }
        return $next($request);
    }
}
