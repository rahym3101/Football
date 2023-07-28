<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            'Barcelona',
            'PSG',
            'Inter Miami',
            'Liverpool',
            'Real Madrid',
            'Manchester City',
            'Manchester United',
            'Chelsea',
            'Bayern Munich',
            'Dortmund',
            'Arsenal',
            'Juventus',
        ];
        foreach ($teams as $team) {
            $obj= new Team();
            $obj->name = $team;
            $obj->save();
        }
    }
}
