<?php

namespace Database\Factories;

use App\Consts\Pref;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'tel' => $this->faker->phoneNumber(),
            'zip' => substr_replace(strval($this->faker->postcode()), '-', 3, 0),
            'address1' => $this->faker->randomElement(Pref::LIST),
            'address2' => $this->faker->city(),
            'address3' => $this->faker->streetAddress(),
            'icon_url' => $this->faker->imageUrl($width = 640, $height = 640),
            'description' => $this->faker->realText(),
            'money' => $this->faker->numberBetween(0, 100000),
            'point' => $this->faker->numberBetween(0, 10000),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
