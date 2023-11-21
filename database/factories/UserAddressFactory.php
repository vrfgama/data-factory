<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserAddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'street' => fake()->streetName,
            'number' => fake()->buildingNumber,
            'cep' => fake()->postcode,
            'district' => fake()->lastName,
            'city' => fake()->city,
            'state' => fake()->state,
            'country' => 'Brazil',
        ];
    }
}
