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
            'offer_id' => $this->faker->numberBetween(1, \App\Consts\Seed::OFFERCOUNT),
            'seller_id' => $this->faker->numberBetween(1, \App\Consts\Seed::USERCOUNT),
            'buyer_id' => $this->faker->numberBetween(1, \App\Consts\Seed::USERCOUNT),
        ];
    }
}
