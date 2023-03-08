<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


class ProStripe
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
        if(Auth::check() &&  Auth::user()->Is_piad=='off'){
            if(Route::currentRouteName()=='stripe-plan-pro' )
            {
                return $next($request);
            }else{
                return redirect()->route('stripe-plan-pro');
            }
            
        }else{
            
            if(Route::currentRouteName()=='stripe-plan-pro' )
            {
                return redirect()->route('pro-dashboard');

            }else{
                return $next($request);   
           
           }
       }
    }
}
