<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class lang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        echo session('lang');exit();
        if (session('lang')) {
            App::setLocale(session('lang'));
        }
        return $next($request);
    }
}
