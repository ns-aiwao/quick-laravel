<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LogMiddleware
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
        file_put_contents('c:/data/access.log',
          date('Y-m-d H:i:s') . "\n", FILE_APPEND);
        // 次のミドルウェアを呼びだし
        return $next($request);
    }
}
