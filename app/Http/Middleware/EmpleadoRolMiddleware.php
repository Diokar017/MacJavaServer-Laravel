<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EmpleadoRolMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()&&Auth::user()->rol === 'EMPLEADO') {
            return $next($request);
        }
        throw new AuthorizationException('Solo EMPLEADO puede acceder');
        // abort(Response::HTTP_FORBIDDEN);
    }
}
