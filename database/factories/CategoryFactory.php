<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'base_category_id' => $this->faker->numberBetween(1, 7),
            'name' => $this->faker->realText(10),
        ];
    }
}
