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
        return [
            'id' => $this->id,
            "name" => $this->name,
            "email" => $this->email,
            "tel" => $this->tel,
            "zip" => $this->zip,
            "address1" => $this->address1,
            "address2" => $this->address2,
            "address3" => $this->address3,
            "icon_url" => $this->icon_url,
            "description" => $this->description,
            "money" => $this->money,
            "point" => $this->point,
            "evaluation_count" => $this->evaluations_count,
            "evaluation_score" => $this->evaluationScore,
        ];
    }
}
