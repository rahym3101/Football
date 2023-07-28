<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Author;


class PostFactory extends Factory
{
    public function definition(): array
    {
        $author = Author::inRandomOrder()->first();
        $createdAt = fake()->dateTimeBetween('-1 week', 'now');

        return [
            'body' => fake()->paragraph(),
            'created_at' => $createdAt,
            'title' => fake()->unique()->jobTitle(),
            'author_id' => $author->id,
        ];
    }
}
