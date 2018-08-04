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
        echo '前往首頁';
        if(!session('admin')){
            return redirect("Account/Account_Log_In");
        }
        else{
            return $next($request);
        }
        
    }
}
