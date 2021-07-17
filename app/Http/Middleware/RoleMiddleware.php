<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $roles)
    {
        if(in_array($request->session()->get("role"),explode("&",$roles)))return $next($request);
        // foreach(explode(",",$roles) as  $role){
        //     if($request->session()->get("role") == $role)return $next($request);
        // }

        return redirect('login');
    }
}
