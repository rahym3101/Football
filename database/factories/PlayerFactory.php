<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;


class PlayerFactory extends Factory
{

    public function definition(): array
    {
        $position = DB::table('positions')->inRandomOrder()->first();
        return [
            'name' => fake()->firstName(),
            'surname' => fake()->lastName(),
            'birthday' => fake()->dateTimeBetween('-40 years', '-18 years'),
            'salary' => rand(1000,10000),
            'position_id' => $position->id,
            'nation' => $this->faker->country(),
        ];
    }
}
