<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            'Производство Netflix',
            'Фильмы основанные на реальных событиях',
            'Производство Apple TV+',
            'Детские и семейные',
            'National Geographic',
            'По комиксам Marvel',
            'Образовательные для детей',
            'Лучшие турецкие сериалы',
            'ТОП документальные',
        ];


        foreach ($tags as $tag) {
            $obj= new Tag();
            $obj->name = $tag;
            $obj->save();
        }
    }
}
