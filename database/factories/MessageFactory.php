<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'talk_room_id' => $this->faker->numberBetween(1, \App\Consts\Seed::TALKROOMCOUNT),
            'offer_id' => $this->faker->numberBetween(1, \App\Consts\Seed::OFFERCOUNT),
            'user_id' => $this->faker->numberBetween(1, \App\Consts\Seed::USERCOUNT),
            'type' => $this->faker->numberBetween(1, 3), // 1: text, 2: image, 3: notification
            'content' => $this->faker->realText(100)
        ];
    }
}
