<?php
namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    public function run(): void
    {
        $positions = [
            ['name' => 'Hüjümçi', 'name_en' => 'Attacker'],
            ['name' => 'Ýarymgoragçy', 'name_en' => 'Midfielder'],
            ['name' => 'Goragçy', 'name_en' => 'Defender'],
            ['name' => 'Derwezeban', 'name_en' => 'Goalkeeper'],
            ];


        foreach ($positions as $position) {
            $obj= new Position();
            $obj->name = $position;
            $obj->save();
        }
    }
}
