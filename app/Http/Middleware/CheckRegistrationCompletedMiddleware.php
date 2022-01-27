<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRegistrationCompletedMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(is_null(auth()->user()->phone) 
        && is_null(auth()->user()->dob) 
        && is_null(auth()->user()->address) 
        && is_null(auth()->user()->transportation) 
        && is_null(auth()->user()->bio) 
        && is_null(auth()->user()->experience)){
            return redirect()->route('step2.create');
        }
        return $next($request);
    }
}
