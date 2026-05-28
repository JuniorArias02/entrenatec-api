<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AutenticarEscritura
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Enlaza con la regla: jwt solo para peticiones POST, PUT, DELETE
        if (in_array(strtoupper($request->method()), ['POST', 'PUT', 'PATCH', 'DELETE'])) {
            if (!Auth::guard('api')->check()) {
                return response()->json([
                    'mensaje' => 'No autorizado. Se requiere un token JWT válido para realizar esta acción.',
                    'datos' => [],
                    'error' => true
                ], 401);
            }
        }

        return $next($request);
    }
}
