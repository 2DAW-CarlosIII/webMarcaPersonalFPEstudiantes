<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $user = parent::toArray($request);
        $user['curriculo'] = $this->curriculo;
        return $user;
        /*[
            'id' => $this->id,
//                'attributes' => parent::toArray($request)
            'attributes' => [
                'first_name' => $this->first_name,
                'email' => $this->email,
                'proyectos' => $this->proyectos
            ]
        ];*/
    }
}
