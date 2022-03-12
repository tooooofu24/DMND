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
            'user_id' => $this->faker->numberBetween(1, 20),
            'offer_id' => $this->faker->numberBetween(1, 100)
        ];
    }
}
