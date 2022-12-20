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
      file_put_contents('d:/aiwao/documents/tmp/laravel_access.log',
        date('Y-m-d H:i:s') . "\n", FILE_APPEND);
      
      $response = $next($request);
      $response->setContent(mb_strtoupper($response->content()));
      return $response;
    }
}
