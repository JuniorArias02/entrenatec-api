<?php

namespace App\Aplicacion\Usuario\Acciones;

use Illuminate\Support\Facades\Auth;

class RefrescarTokenAccion
{
    /**
     * Refresca el token JWT actual de la sesión y retorna el nuevo token generado.
     */
    public function ejecutar(): string
    {
        return Auth::guard('api')->refresh();
    }
}
