<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ColaboradorCargoResource extends JsonResource
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
            'cargo_id'       => $this->cargo_id,
            'colaborador_id'      => $this->colaborador_id,
            'nota_desempenho'        => $this->nota_desempenho,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
