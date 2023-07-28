<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class ClubFactory extends Factory
{
    public function definition(): array
    {
        $team = DB::table('teams')->inRandomOrder()->first();
        $coach = DB::table('coaches')->inRandomOrder()->first();
        $player = DB::table('players')->inRandomOrder()->first();
        $post = DB::table('posts')->inRandomOrder()->first();
        $game= DB::table('games')->inRandomOrder()->first();
        return [
            'team_id' => $team->id,
            'coach_id' => $coach->id,
            'player_id' => $player->id,
            'post_id' => $post->id,
            'game_id' => $game->id,
        ];
    }
}

