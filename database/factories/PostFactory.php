<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class PostFactory extends Factory
{
    public function definition(): array
    {
        $author = DB::table('authors')->inRandomOrder()->first();
        $tag = DB::table('tags')->inRandomOrder()->first();
        $createdAt = fake()->dateTimeBetween('-1 week', 'now');

        return [
            'body' => fake()->paragraph(),
            'created_at' => $createdAt,
            'title' => fake()->unique()->jobTitle(),
            'tag_id' => $tag->id,
        ];
    }
}
