<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContratResource extends JsonResource
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
            "nom_contrat"=> $this->nom_contrat,
            "dateDebut"=> $this->dateDebut,
            "dateFin"=> $this->dateFin,
            "created_at"=> $this->created_at,
            "updated_at"=> $this->updated_at
        ];
    }
}
