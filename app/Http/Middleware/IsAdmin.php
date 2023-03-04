<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Route::currentRouteName()=='admin-login'){
            if(Auth::check() &&  Auth::user()->user_type=='admin'){
                return redirect()->route('admin-dashboard');
            }else{
               return $next($request); 
            }
        }else{
            if(Auth::check() &&  Auth::user()->user_type=='admin'){
                return $next($request); 
            }else{
                return redirect()->route('admin-login');
            }
        }
    }
}
