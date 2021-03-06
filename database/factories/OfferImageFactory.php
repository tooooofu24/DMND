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
            'offer_id' => $this->faker->numberBetween(1, \App\Consts\Seed::OFFERCOUNT),
            'url' => $this->faker->imageUrl($width = 640, $height = 640)
        ];
    }
}
