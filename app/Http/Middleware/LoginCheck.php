<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class LoginCheck
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
        $login = Session::get('login');
        $id = Session::get('id');
        $name = Session::get('name');
        $email = Session::get('email');

        if($login == true  && $id && $name && $email)
        {
            return redirect()->route('dashboard');
        }
        return $next($request);
    }
}
