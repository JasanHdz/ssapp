<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'clave1' => $this->key_one,
            'clave2' => $this->key_two,
            'nombre' => $this->name,
            'apellido_paterno' => $this->last_name,
            'apellido_materno' => $this->second_last_name,
            'telefono' => $this->phone,
            'calle' => $this->street,
            'colonia' => $this->suburb,
            'numero_exterior' => $this->outdoor_number,
            'numero_interior' => $this->interior_number,
        ];
    }
}
