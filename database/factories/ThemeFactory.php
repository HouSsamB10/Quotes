<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Theme>
 */
class ThemeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'font_en' => fake()->name(),
            'image' => fake()->name(),
            'is_free' => fake()->boolean(),
            'category_id' => fake()->randomElement(Category::pluck('id')),
        ];
    }
}
