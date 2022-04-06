<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserCategoryFactory extends Factory
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
            'category_id' => $this->faker->numberBetween(1, \App\Consts\Seed::CATEGORYCOUNT),
        ];
    }
}
