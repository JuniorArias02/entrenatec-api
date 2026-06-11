<?php

namespace App\Aplicacion\Usuario\Acciones;

use App\Dominio\Usuario\Contratos\UsuarioRepositorio;
use App\Models\Usuario;

class ActualizarPerfilAccion
{
    private UsuarioRepositorio $repositorio;

    public function __construct(UsuarioRepositorio $repositorio)
    {
        $this->repositorio = $repositorio;
    }

    public function ejecutar(int $id, array $datos): Usuario
    {
        return $this->repositorio->actualizarPerfil($id, $datos);
    }
}
