<?php

namespace Database\Factories;

use App\Consts\Pref;
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
            'buyer_id' => $this->faker->numberBetween(1, 20),
            'seller_id' => $this->faker->numberBetween(1, 20),
            'category_id' => $this->faker->numberBetween(1, 40),
            'condition' => $this->faker->numberBetween(1, 4),
            'receiced_pref' => $this->faker->randomElement(Pref::LIST),
            'delivery_fee_paid_by' => $this->faker->numberBetween(1, 4),
            'paid_with' => $this->faker->numberBetween(1, 4),
            'price' => $this->faker->randomElement([1000, 2000, 3000, 4000, 5000, 10000]),
            'status' => $this->faker->numberBetween(1, 4),
            'memo' => $this->faker->realText(),
            'eval_to_buyer' => $this->faker->numberBetween(1, 5),
            'eval_memo_to_buyer' => $this->faker->realText(),
            'eval_to_seller' => $this->faker->numberBetween(1, 5),
            'eval_memo_to_seller' => $this->faker->realText(),
        ];
    }
}
