<?php

namespace App\Aplicacion\Usuario\Acciones;

use App\Dominio\Usuario\Contratos\UsuarioRepositorio;
use App\Models\Usuario;

class ActualizarPasswordAccion
{
    public function __construct(
        private readonly UsuarioRepositorio $repositorio
    ) {}

    public function ejecutar(int $id, string $nuevaPassword): Usuario
    {
        return $this->repositorio->actualizarPassword($id, $nuevaPassword);
    }
}
