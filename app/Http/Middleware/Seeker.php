<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;

class Seeker
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
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        if (Auth::user()->role == 'seeker') {
            return $next($request);
        }
        if (Auth::user()->role == 'company') {
            return redirect()->route('company');
        }
        if (Auth::user()->role == 'admin') {
            return redirect()->route('admin');
        }
    }
}
