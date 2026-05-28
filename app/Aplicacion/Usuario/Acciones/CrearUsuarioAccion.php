<?php

namespace App\Aplicacion\Usuario\Acciones;

use App\Dominio\Usuario\Contratos\UsuarioRepositorio;
use App\Dominio\Usuario\DTOs\CrearUsuarioDTO;
use App\Models\Usuario;

class CrearUsuarioAccion
{
    public function __construct(
        private readonly UsuarioRepositorio $usuarioRepositorio
    ) {}

    /**
     * Ejecuta el caso de uso para registrar un usuario.
     */
    public function ejecutar(CrearUsuarioDTO $dto): Usuario
    {
        return $this->usuarioRepositorio->crear($dto);
    }
}
