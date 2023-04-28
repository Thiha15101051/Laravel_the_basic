<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title"=>fake()->realText($maxNbChars = 20, $indexSize = 2),
            "description"=>fake()->realText($maxNbChars = 500, $indexSize = 2)
        ];
    }
}
