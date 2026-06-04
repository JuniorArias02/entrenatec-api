<?php

namespace App\Dominio\Tema\DTOs;

use Illuminate\Http\UploadedFile;

class CrearTemaDTO
{
    public function __construct(
        public readonly string $titulo,
        public readonly string $slug,
        public readonly ?string $descripcion,
        public readonly int $grado_id,
        public readonly int $materia_id,
        public readonly int $periodo_id,
        public readonly UploadedFile|string|null $portada,
        public readonly int $orden,
        public readonly string $estado,
        public readonly ?int $creado_por = null
    ) {}

    public static function desdeArray(array $datos): self
    {
        return new self(
            titulo: $datos['titulo'],
            slug: $datos['slug'],
            descripcion: $datos['descripcion'] ?? null,
            grado_id: $datos['grado_id'],
            materia_id: $datos['materia_id'],
            periodo_id: $datos['periodo_id'],
            portada: $datos['portada'] ?? null,
            orden: $datos['orden'] ?? 1,
            estado: $datos['estado'] ?? 'BORRADOR',
            creado_por: auth()->id() // Asignamos automáticamente el usuario logueado
        );
    }

    public function aArray(): array
    {
        return [
            'titulo' => $this->titulo,
            'slug' => $this->slug,
            'descripcion' => $this->descripcion,
            'grado_id' => $this->grado_id,
            'materia_id' => $this->materia_id,
            'periodo_id' => $this->periodo_id,
            'portada' => $this->portada,
            'orden' => $this->orden,
            'estado' => $this->estado,
            'creado_por' => $this->creado_por,
        ];
    }
}
