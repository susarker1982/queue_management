<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,$Role)
    {
        $userid=null;
        if($Role=="admin"){
            $userid=1;
        }

        if (Auth::user() &&  Auth::user()->usertype == $userid) {
            return $next($request);
           // return redirect('dashboard');
       }

       return redirect('/')->with('error','You have not admin access');
    }
}
