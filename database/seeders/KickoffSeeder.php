<?php

namespace Database\Seeders;

use App\Models\Kickoff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KickoffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kickoffs = [
            '20:00',
            '20:30',
            '21:00',
            '21:30',
            '22:00',
            '22:30',
            '23:00',
            '23:30',
            '00:00',
            '00:30',
            '01:00',
            '01:30',
        ];

        foreach ($kickoffs as $kickoff) {
            $obj= new Kickoff();
            $obj->name = $kickoff;
            $obj->save();
        }
    }
}
