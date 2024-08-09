<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CookieConsent
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
        if ($request->has('acceptCookies')) {
            // Store in cookies
            return redirect()->back()->withCookie(cookie('cookie_consent', 'accepted', 525600));
        }

        return $next($request);
    }
}
