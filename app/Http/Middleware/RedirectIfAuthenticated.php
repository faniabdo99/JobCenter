<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{

    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
          if(auth()->user()->type == 'user'){
            return redirect()->route('dash.user.home');
          }elseif(auth()->user()->type == 'company'){
            return redirect()->route('dash.company.home');
          }else{
            return redirect()->route('home');
          }
        }

        return $next($request);
    }
}
