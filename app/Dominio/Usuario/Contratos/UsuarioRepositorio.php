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

    public function obtenerTodos();

    public function obtenerPorId(int $id): ?Usuario;

    public function actualizarPassword(int $id, string $nuevaPassword): Usuario;

    public function actualizarRol(int $id, string $nuevoRol): Usuario;
}
