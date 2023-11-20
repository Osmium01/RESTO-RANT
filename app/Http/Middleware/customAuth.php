<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class customAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // echo "Middleware is working";

        $path = $request->path();

        
        if(($path == "login" || $path == "register") && $request->session()->has('user')){
            return redirect('/');
        }

        else if($path != "login" && $path != "register" && !$request->session()->has('user')){
            return redirect('login');
        }
        
        return $next($request);
    }
}
