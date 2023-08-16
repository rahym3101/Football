<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;


class GameFactory extends Factory
{
    public function definition(): array
    {
        $team = DB::table('teams')->inRandomOrder()->first();
        $kickoff = DB::table('kickoffs')->inRandomOrder()->first();
        $date = DB::table('dates')->inRandomOrder()->first();

        return [
            'sort' => fake()->name(),
            'opponent' => $team->name,
            'kickoff' => $kickoff->name,
            'date' => $date->name,
        ];
    }
}
