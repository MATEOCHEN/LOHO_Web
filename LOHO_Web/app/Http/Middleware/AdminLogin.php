<?php

namespace App\Http\Middleware;

use Closure;

class AdminLogin
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
        echo  session('admin');
        if(session('admin') != '123'){
            return redirect("Account/Account_Log_In");
        }
        else{
            return $next($request);
        }
        
    }
}
