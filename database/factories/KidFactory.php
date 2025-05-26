<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kid>
 */
class KidFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->name;
        return [
            'first_name' => $name,
            'last_name' => fake()->lastName,
            'declension_name' => $name,
            'history' => fake()->text(500),
            'start_fundraising' => 0,
            'end_fundraising' => rand(5000, 100000),
        ];
    }
}
