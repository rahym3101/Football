<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     *
     */
    public function run(): void
    {
        $this->call([
            PositionSeeder::class,
            TeamSeeder::class,
            TagSeeder::class,
            KickoffSeeder::class,
            DateSeeder::class,
        ]);

        \App\Models\Post::factory()->count(36)->create();
        \App\Models\Game::factory()->count(60)->create();
        \App\Models\Coach::factory()->count(24)->create();
        \App\Models\Player::factory()->count(242)->create();
        \App\Models\Club::factory()->count(12)->create();
    }
}
