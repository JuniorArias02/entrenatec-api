<?php

namespace App\Aplicacion\Usuario\Acciones;

use App\Dominio\Usuario\Contratos\UsuarioRepositorio;
use App\Models\Usuario;

class ActualizarRolAccion
{
    public function __construct(
        private readonly UsuarioRepositorio $repositorio
    ) {}

    public function ejecutar(int $id, string $nuevoRol): Usuario
    {
        return $this->repositorio->actualizarRol($id, $nuevoRol);
    }
}
