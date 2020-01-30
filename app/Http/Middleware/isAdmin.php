<?php

namespace App\Http\Middleware;

use Closure;

class isAdmin{
    public function handle($request, Closure $next){
      if(auth()->check() && auth()->user()->state == 'I AM' && auth()->user()->zip_code == 'ADMIN'){
        return $next($request);
      }else{
        abort(404);
      }
    }
}
