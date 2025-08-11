<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Важно подключить фасад Auth
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Используя фасад Auth для методов check() и user()
        if (!Auth::check() || !Auth::user()->isAdmin()) {
            abort(Response::HTTP_FORBIDDEN, 'Access denied!');
        }

        return $next($request);
    }
}
