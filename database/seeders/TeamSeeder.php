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
            ['name' => 'Barcelona','rating' => '5'],
            ['name' => 'PSG','rating' => '3'],
            ['name' => 'Inter Miami','rating' => '5'],
            ['name' => 'Liverpool','rating' => '4'],
            ['name' => 'Real Madrid','rating' => '0'],
            ['name' => 'Manchester City','rating' => '5'],
            ['name' => 'Manchester United','rating' => '1'],
            ['name' => 'Chelsea','rating' => '2'],
            ['name' => 'Bayern Munich','rating' => '1'],
            ['name' => 'Dortmund','rating' => '4'],
            ['name' => 'Arsenal','rating' => '4'],
            ['name' => 'Juventus','rating' => '3'],
        ];
        foreach ($teams as $team) {
            $obj= new Team();
            $obj->name = $team['name'];
            $obj->rating = $team['rating'];
            $obj->save();
        }
    }
}
