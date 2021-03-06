<?php

namespace Database\Factories;

use App\Consts\Offer\OfferCondition;
use App\Consts\Pref;
use App\Consts\Offer\OfferStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText(),
            'buyer_id' => $this->faker->numberBetween(1, \App\Consts\Seed::USERCOUNT),
            'seller_id' => $this->faker->numberBetween(1, \App\Consts\Seed::USERCOUNT),
            'category_id' => $this->faker->numberBetween(1, \App\Consts\Seed::CATEGORYCOUNT),
            'condition' => $this->faker->randomElement(OfferCondition::LIST),
            'received_pref' => $this->faker->randomElement(Pref::LIST),
            'delivery_fee_payment_burden' => $this->faker->numberBetween(0, 1),
            'payment_method' => $this->faker->numberBetween(1, 4),
            'price' => $this->faker->randomElement([1000, 2000, 3000, 4000, 5000, 10000]),
            'status' => $this->faker->randomElement(OfferStatus::LIST),
            'arrival_memo' => $this->faker->realText(35),
            'description' => $this->faker->realText(),
        ];
    }
}
