<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MessageResource extends ApiCommonResource
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
            "id" => $this->id,
            "talk_room_id" => $this->talk_room_id,
            "type" => $this->type,
            "offer_id" => $this->offer_id,
            "user_id" => $this->user_id,
            "content" => $this->content,
        ];
    }
}
