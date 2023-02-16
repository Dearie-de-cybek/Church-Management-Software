<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            // TODO:Create relationship and factory to seed 

            // 'user_id' => User::factory(),
            // 'category_id' => Category::factory(),
            // 'name' => fake()->sentence,
            // 'amount' => fake()->slug(),
            // 'payment_type' => fake()->sentence,
            // 'date' => fake()->paragraph,
            // 'status' => fake()->message
        ];
    }
}
