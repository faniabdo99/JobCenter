<?php

namespace App\Http\Middleware;

use Closure;

class isCompany{
   
    public function handle($request, Closure $next){
        if(auth()->check()){
            if(auth()->user()->type == 'company'){
                return $next($request);
            }else{
                return redirect()->route('home');
            }
        }
    }
}
