<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
// use Auth;
use Session;
// use Symfony\Component\HttpFoundation\Session\Session;


class Mentor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if(Auth::user()->role == 1 ){

            Session::flash('warning', 'You do not have the required permissions to do this');

            return redirect()->back();
        }


        return $next($request);
    }
}
