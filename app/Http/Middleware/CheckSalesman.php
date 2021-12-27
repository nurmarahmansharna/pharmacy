<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckSalesman
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
        if(auth()->check() && auth()->user()->type=='salesman')
        {
            return $next($request);
        }
        else
        {
            return redirect()->back()->with('message','You do not have permission');
        }
    }
}
