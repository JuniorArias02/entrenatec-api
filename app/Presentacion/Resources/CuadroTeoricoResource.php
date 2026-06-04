<?php

namespace App\Presentacion\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CuadroTeoricoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'grado_id' => $this->grado_id,
            'materia_id' => $this->materia_id,
            'periodo_id' => $this->periodo_id,
            'contenido' => $this->contenido,
            'estado' => $this->estado,
            'grado' => new GradoResource($this->whenLoaded('grado')),
            'materia' => new MateriaResource($this->whenLoaded('materia')),
            'periodo' => new PeriodoResource($this->whenLoaded('periodo')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
