<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RedirectIfUnauthenticatedWithLang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        try {
            return $next($request);
        } catch (AuthenticationException $e) {
            $lang = Session::get('locale', 'en');
            return redirect()->route('login', ['lang' => $lang]);
        }
    }
}
