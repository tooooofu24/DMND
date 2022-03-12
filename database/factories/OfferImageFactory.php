<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OfferImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'offer_id' => $this->faker->numberBetween(1, 100),
            'url' => $this->faker->imageUrl(),
        ];
    }
}
