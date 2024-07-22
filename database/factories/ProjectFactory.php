<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
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
            "heading" => fake()->sentence(),
            "starting_date" => fake()->year(),
            "facebook_link" => fake()->url(),
            "ending_date" => fake()->year(),
            "location" => fake()->city(),
            "funded_by" => fake()->name(),
            "target_beneficiaries" => "Women, Children",
            "placeholder_image" => fake()->imageUrl(),
            "description" => fake()->paragraph(90),
            "images" => json_encode([fake()->imageUrl(), fake()->imageUrl(), fake()->imageUrl()]),
            "created_at" => now(),
            "updated_at" => now(),
        ];
    }
}
