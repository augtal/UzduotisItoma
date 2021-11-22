<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
<<<<<<< HEAD
    public function handle($request, Closure $next)
    {
        if (Session()->has('language') AND array_key_exists(Session()->get('language'), config('languages'))) {
            App::setLocale(Session()->get('language'));
        }
=======
    public function handle(Request $request, Closure $next)
    {
        App::setLocale($request->language);
>>>>>>> e0ddb2d0d9d4abbc2b3a4d203c6336ae4ac12567

        return $next($request);
    }
}
