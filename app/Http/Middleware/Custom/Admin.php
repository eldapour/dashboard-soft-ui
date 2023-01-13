<?php

namespace App\Http\Middleware\Custom;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
//        abort(403);
        if (Auth::guard('admin')->check()){
            if ($request=='login'){
                return redirect('admin/home');
            }
//            return $request;
            return $next($request);
        }
//        abort(403);
        return redirect('admin/login');
    }
}
