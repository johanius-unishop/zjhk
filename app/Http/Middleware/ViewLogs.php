<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ViewLogs
{
    public function handle(Request $request, Closure $next)
    {
        
        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        

        // Если все условия выполнены, продолжаем выполнение запроса
        return $next($request);
    }
}