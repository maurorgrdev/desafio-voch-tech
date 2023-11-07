<?php

namespace App\Http\Resources;

use App\Repositories\UnidadeRepository;
use Illuminate\Http\Resources\Json\JsonResource;

class ColaboradorUnidadeCargoResource extends JsonResource
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
            'unidade'    => $this->unidade,
            'cargo'      => $this->cargo,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
