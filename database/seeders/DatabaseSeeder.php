<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\CategoriesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $admin = User::factory()->create([
            'name' => $name = 'Admin',
            'username' => $name,
            'email' => 'admin@gmail.com',
            'is_admin' => true,
            'email_verified_at' => now(),
            'password' => Hash::make('admin123'),
            'remember_token' => Str::random(10),
        ]);

        $this->call(CategoriesSeeder::class);


        Post::factory(200)->recycle([
            // $category1,
            // Category::factory(3)->create(),
            Category::all(),
            $admin,
            User::factory(14)->create()
        ])->create();
    }
}
