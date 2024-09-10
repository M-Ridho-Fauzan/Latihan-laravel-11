<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // ['title', 'author', 'slug', 'body'];
        return [
            'title' => $title = fake()->sentence(),
            'image' => 'https://picsum.photos/id/' . fake()->randomNumber(2, true) . '/700/500',
            'author_id' => User::factory(),
            'category_id' => Category::factory(),
            'slug' => Str::slug($title),
            'body' => fake()->text(400)
        ];
    }
}
