<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Setlocale
{

    public function handle(Request $request, Closure $next): Response
    {
        if(session()->has('locale')){
            app()->setLocale($request->session()->get('locale'));
        }
        return $next($request);
    }
}
