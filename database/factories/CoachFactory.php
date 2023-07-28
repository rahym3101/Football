<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CoachFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => fake()->firstName(),
            'surname' => fake()->lastName(),
            'birthday' => fake()->dateTimeBetween('-70 year', '-38 week'),
            'salary' => rand(500,5000),
        ];
    }
}
