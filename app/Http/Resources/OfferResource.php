<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OfferResource extends ApiCommonResource
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
            "title" => $this->title,
            "condition" => $this->condition,
            "received_pref" => $this->received_pref,
            "delivery_fee_payment_burden" => $this->delivery_fee_payment_burden,
            "payment_method" => $this->payment_method,
            "price" => $this->price,
            "status" => $this->status,
            "description" => $this->description,
            "favorites_count" => $this->favorites_count,
            "image_urls" => $this->image_urls,
            "buyer" => new UserResource($this->buyer),
            "seller" => new UserResource($this->seller),
            "category" => new CategoryResource($this->category),
        ];
    }
}
