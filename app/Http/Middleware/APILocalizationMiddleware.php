<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\CPU\Helpers;

class APILocalizationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $local = ($request->hasHeader('lang')) ? (strlen($request->header('lang')) > 0 ? $request->header('lang') : Helpers::default_lang()) : Helpers::default_lang();
        App::setLocale($local);
        return $next($request);
    }
}
