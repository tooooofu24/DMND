<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EvaluationFactory extends Factory
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
            'giver_id' => $this->faker->numberBetween(1, \App\Consts\Seed::USERCOUNT),
            'taker_id' => $this->faker->numberBetween(1, \App\Consts\Seed::USERCOUNT),
            'type' => $this->faker->boolean(),
            'value' => $this->faker->numberBetween(1, 5),
            'comment' => null,
        ];
    }
}
