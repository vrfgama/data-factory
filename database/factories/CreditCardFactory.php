<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CreditCardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {     
        
        $type= fake()->creditCardType();
        
        return [
            'number' => fake()->creditCardNumber($type),
            'cvv' => fake()->randomNumber(3, true),
            'type' => $type,
            'expiration_date' => fake()->creditCardExpirationDate(false),
        ];
    }
}
