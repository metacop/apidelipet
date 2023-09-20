<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;

class doblePeticion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Obtenemos el token de la solicitud
        $token = $request->header('Authorization');

        // Verificamos si la solicitud ya ha sido procesada
        if (Cache::has($token)) {
            // Devolvemos un error
            return response()->json([
                'message' => 'La solicitud ya ha sido procesada.',
            ], 409);
        }

        // Procesamos la solicitud
        $response = $next($request);

        // Almacenamos el token en caché
        Cache::put($token, true, 10);

        return $response;
    }
}