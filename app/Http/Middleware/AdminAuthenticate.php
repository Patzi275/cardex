<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard('admin')->check()) {
            return $next($request);
        }

        if ($request->ajax() || $request->wantsJson()) {
            return response('Unauthorized', 401);
        } else {
            return redirect()->route('admin.login.show');
        }
    }

    protected function redirectTo() {
        return route('admin.login.show');
    }
}
