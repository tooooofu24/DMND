<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FavoriteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, \App\Consts\Seed::USERCOUNT),
            'offer_id' => $this->faker->numberBetween(1, \App\Consts\Seed::OFFERCOUNT),
        ];
    }
}
