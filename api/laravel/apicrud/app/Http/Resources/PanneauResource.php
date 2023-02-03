<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PanneauResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id"=> $this->id,
            "nom_panneau"=> $this->nom_panneau,
            "longitude"=> $this->longitude,
            "latitude"=> $this->latitude,
            "created_at"=> $this->created_at,
            "updated_at"=> $this->updated_at
        ];
    }
}
