<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
class IsPro
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
        if(Route::currentRouteName()=='pro-login' || Route::currentRouteName()=='pro-register'){
            if(Auth::check() &&  Auth::user()->user_type=='pro'){
                if(str_replace(url('/'), '', url()->previous())=="/pro/register"){
                    Auth::logout();
                    return redirect()->route('pro-login');
                }else{
                    return redirect()->route('pro-dashboard');
                }
            }else{
               return $next($request); 
            }
        }else{
            if(Auth::check() &&  Auth::user()->user_type=='pro'){
                return $next($request); 
            }else{
                return redirect()->route('pro-login');
            }
        }
    }
}
