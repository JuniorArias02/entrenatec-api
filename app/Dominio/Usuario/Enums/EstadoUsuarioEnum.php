<?php

namespace App\Dominio\Usuario\Enums;

enum EstadoUsuarioEnum: string
{
    case ACTIVO = 'ACTIVO';
    case INACTIVO = 'INACTIVO';
}
