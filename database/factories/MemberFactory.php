<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "id" => fake()->uuid(),
            "name" => fake()->name(),
            "position" => fake()->jobTitle(),
            "image" => fake()->imageUrl(),
            "start_date" => fake()->date(),
            "description" => fake()->paragraph(10),
            "created_at" => now(),
            "updated_at" => now(),
        ];
    }
}
