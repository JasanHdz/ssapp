<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'meta' => [
                'organizacion' => 'Platzi',
                'authors' => [
                    'Jasan Hernández',
                    'Platzi'
                ]
            ],
            'type' => 'articles'
        ];
    }
}
