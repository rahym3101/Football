<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Date;

class DateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dates = [
            '11.08',
            '12.08',
            '13.08',
            '14.08',
            '15.08',
            '16.08',
            '17.08',
            '18.08',
            '19.08',
            '20.08',
            '21.08',
            '22.08',
        ];

        foreach ($dates as $date) {
            $obj = new Date();
            $obj->name = $date;
            $obj->save();
        }
    }
}
