<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class IsClient
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
        if(Route::currentRouteName()=='client-login' || Route::currentRouteName()=='client-register'){
            if(Auth::check() &&  Auth::user()->user_type=='client'){
                if(str_replace(url('/'), '', url()->previous())=="/client/register"){
                    Auth::logout();
                    return redirect()->route('client-login');
                }else{
                    return redirect()->route('client-dashboard');
                }
            }else{
               return $next($request); 
            }
        }else{
            if(Auth::check() &&  Auth::user()->user_type=='client'){
                return $next($request); 
            }else{
                return redirect()->route('client-login');
            }
        }
    }
}
