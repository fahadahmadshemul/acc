<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class DashboardCheck
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
        if($login != true && $id == NULL && $name == NULL && $email == NULL)
        {
            return redirect()->route('login');
        }
        return $next($request);
    }
}
