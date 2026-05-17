<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
public function handle(Request $request, Closure $next, $role): Response
{
    // Cek apakah user sudah login dan apakah rolenya sesuai
    if (!auth()->check() || auth()->user()->role !== $role) {
        abort(403, 'Akses ditolak! Kamu bukan ' . $role);
    }

    return $next($request);
}
}
