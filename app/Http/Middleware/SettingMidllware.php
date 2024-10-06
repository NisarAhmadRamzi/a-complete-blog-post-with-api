<?php

namespace App\Http\Middleware;

use App\Models\Setting;
use Closure;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use Symfony\Component\HttpFoundation\Response;


class SettingMidllware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        \View::share('setting',Setting::first());
        return $next($request);
    }
}
