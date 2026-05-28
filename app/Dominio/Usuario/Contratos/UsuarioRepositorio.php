<?php

namespace App\Dominio\Usuario\Contratos;

use App\Dominio\Usuario\DTOs\CrearUsuarioDTO;
use App\Models\Usuario;

interface UsuarioRepositorio
{
    /**
     * Crea un nuevo usuario en el sistema.
     */
    public function crear(CrearUsuarioDTO $dto): Usuario;

    /**
     * Busca un usuario por su correo electrónico.
     */
    public function obtenerPorCorreo(string $correo): ?Usuario;
}
