<?php

namespace App\Aplicacion\Usuario\Acciones;

use App\Dominio\Usuario\Contratos\UsuarioRepositorio;

class ObtenerUsuariosAccion
{
    public function __construct(
        private readonly UsuarioRepositorio $repositorio
    ) {}

    public function ejecutar()
    {
        return $this->repositorio->obtenerTodos();
    }
}
