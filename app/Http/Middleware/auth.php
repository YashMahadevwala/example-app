<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,$yes)
    {
        if($request->age == "king" or $request->age == "yash"){
            echo $request->age;
            echo $yes;
            // return redirect('uservari');
        }else{
            return redirect('usernot');
        }
        // return $next($request);
    }
}
