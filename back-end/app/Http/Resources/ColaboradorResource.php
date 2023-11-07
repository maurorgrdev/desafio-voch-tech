<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ColaboradorResource extends JsonResource
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
            'id'         => $this->id,
            'nome'       => $this->nome,
            'email'      => $this->email,
            'cpf'        => $this->cpf,
            'unidade_id' => $this->unidade_id,
            'teste'      => $this->unidade(),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
