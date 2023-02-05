<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
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
            "nom_client"=> $this->nom_client,
            "prenom_client"=> $this->prenom_client,
            "email_client"=> $this->email_client,
            "entreprise_client"=> $this->entreprise_client,
            "created_at"=> $this->created_at,
            "updated_at"=> $this->updated_at
        ];
    }
}
