<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


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
        $folderPath = '/home/haseeb/What Else/AdminPanel/public/assets/images/fakeproduct/';
        $imageFiles = File::files($folderPath);

        $image = [];

        foreach ($imageFiles as $imageFile) {
            $imageName = time() . '-' . $imageFile->getBasename();
            Storage::put('public/' . $imageName, file_get_contents($imageFile->getPathname()));
            $image[] = $imageName;
        }

        $categoryIds = Category::pluck('id')->toArray();
        return [
            'title' => fake()->randomElement(['Car', 'Phone', 'Chair', 'Laptop', 'Fan', 'Books', 'Pencil']),
            'vendor_id' => fake()->numberBetween(1, 4),
            'category_id' => fake()->randomElement($categoryIds),
            'discription' => fake()->paragraphs(3, true),
            'productDate' => fake()->time(),
            'image' => fake()->randomElement($image),
            'price' => fake()->randomNumber(4),
            'gender' => fake()->randomElement(['Male', 'Femail', 'Children', 'other']),
            'size' => fake()->randomElement(['SM', 'MD', 'LG', 'XL', 'XXl'])
        ];
    }
}
