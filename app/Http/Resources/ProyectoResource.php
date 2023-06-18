<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProyectoResource extends JsonResource
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
//                'attributes' => parent::toArray($request)
            'docente_id' => $this->docente_id,
            'nombre' => $this->nombre,
            'metadatos' => $this->metadatos,
            'url_github' => $this->url_github,
            'ciclo' => $this->ciclo,
            'familia' => $this->familia,
            'descripcion' => $this->descripcion,
            'img_src' => $this->img_src,
            'estudiantes' => $this->users,

        ];
    }
}
