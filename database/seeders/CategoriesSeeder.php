<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create([
            'name' => $name = 'Web Programing',
            'slug' => $name,
        ]);
        Category::factory()->create([
            'name' => $name = 'Web Design',
            'slug' => $name,
        ]);
        Category::factory()->create([
            'name' => $name = 'UI/UX Design',
            'slug' => $name,
        ]);
        Category::factory()->create([
            'name' => $name = 'Comedy',
            'slug' => $name,
        ]);
        Category::factory()->create([
            'name' => $name = 'Hard-Echi',
            'slug' => $name,
        ]);
    }
}
