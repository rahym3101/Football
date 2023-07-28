<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;


class GameFactory extends Factory
{
    public function definition(): array
    {
        $team = DB::table('teams')->inRandomOrder()->first();
        $createdAt = fake()->dateTimeBetween('-1 week', 'now');
        return [
            'sort' => fake()->address(),
            'date' => $createdAt,
            'opponent' => $team->id,
        ];
    }
}
