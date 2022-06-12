<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LowerEmail
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
        $email = data_get($request, 'email');
        if ($email) {
            $request->merge(['email' => strtolower($email)]);
        }
        return $next($request);
    }
}
