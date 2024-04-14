<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->randomElement(['Car', 'Phone', 'Chair', 'Laptop', 'Fan', 'Books', 'Pencil']),
            'vendor_id' => fake()->numberBetween(1, 4),
            'category_id' => fake()->numberBetween(1, 4),
            'discription' => fake()->sentence(),
            'productDate' => fake()->time(),
            'image' => fake()->imageUrl(),
            'price' => fake()->randomNumber(3),
            'gender' => fake()->randomElement(['Male', 'Femail', 'Children', 'other']),
            'size' => fake()->randomElement(['SM', 'MD', 'LG', 'XL', 'XXl'])
        ];
    }
}
