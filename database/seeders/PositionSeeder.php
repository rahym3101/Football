<?php
namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    public function run(): void
    {
        $positions = [
            'Attacker',
            'Midfielder',
            'Defenfer',
            'Goalkeeper',
            ];


        foreach ($positions as $position) {
            $obj= new Position();
            $obj->name = $position;
            $obj->save();
        }
    }
}
