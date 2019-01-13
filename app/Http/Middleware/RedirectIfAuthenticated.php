<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
             
        switch ($guard) {

            case 'teacher':
                $link = "/teacher/dashboard";
                break;

                case 'student':
                    $link = "/student/dashboard";
                    break;
            
            default:
                $link = "/home";
                break;
        }
        if (Auth::guard($guard)->check()) {
            return redirect($link);
        }


        return $next($request);
    }
}
