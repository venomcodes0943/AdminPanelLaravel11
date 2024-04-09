<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(3)->create();
        // Category::factory(5)->create();
        User::factory()->create([
            'name' => 'Haseeb',
            'email' => 'h@h.com',
            'password' => '123',
        ]);

    }
}
