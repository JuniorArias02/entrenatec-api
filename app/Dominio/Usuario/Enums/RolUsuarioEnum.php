<?php

namespace App\Dominio\Usuario\Enums;

enum RolUsuarioEnum: string
{
    case ADMIN = 'ADMIN';
    case DOCENTE = 'DOCENTE';
    case EDITOR = 'EDITOR';
    case ESTUDIANTE = 'ESTUDIANTE';
}
