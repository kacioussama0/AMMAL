<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $faker = \Faker\Factory::create('ar_JO');

        return [
            'title' => $faker->name,
            'slug' => Str::slug($faker->name,'-','ar'),
            'title_en' => fake('en')->text(30),
            'slug_en' => Str::slug(fake('en')->text(30),'-','en'),
            'title_fr' => fake('fr')->text(30),
            'slug_fr' => Str::slug(fake('fr')->text(30),'-','fr'),
            'title_de' => fake('de')->text(30),
            'slug_de' => Str::slug(fake('de')->text(30),'-','de'),
            'content' => $faker->sentence,
            'content_en' => fake('en')->sentence(400),
            'content_fr' => fake('fr')->sentence(400),
            'content_de' => fake('de')->sentence(400),
            'thumbnail' => "posts/ar/7veO4RPgxfOOEyspMZJ9Zo0oyZf80D0kJNvQQU4Y.jpg",
            'thumbnail_en' => "posts/ar/7veO4RPgxfOOEyspMZJ9Zo0oyZf80D0kJNvQQU4Y.jpg",
            'thumbnail_fr' => "posts/ar/7veO4RPgxfOOEyspMZJ9Zo0oyZf80D0kJNvQQU4Y.jpg",
            'thumbnail_de' => "posts/ar/7veO4RPgxfOOEyspMZJ9Zo0oyZf80D0kJNvQQU4Y.jpg",
            'category_id' => Category::all()->random()->id,
            'is_published' => 1,
        ];
    }
}
