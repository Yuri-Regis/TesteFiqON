<?php

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
        'id' => $this->id,
        'nome' => $this->nome,
        'valor' => $this->valor,
        'loja_id' => $this->loja_id,
        'ativo' => $this->ativo,
        'estoque' => $this->estoque,
        'data' => $this->created_at
        ];
    }
}
