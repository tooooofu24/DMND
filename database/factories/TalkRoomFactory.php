<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TalkRoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'offer_id' => '',
            'seller_id' => '',
            'buyer_id' => ''
        ];
    }
}
