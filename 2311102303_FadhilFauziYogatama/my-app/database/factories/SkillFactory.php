<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SkillFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama_skill' => $this->faker->randomElement(['HTML', 'CSS', 'Laravel', 'JavaScript']),
            'level' => $this->faker->numberBetween(60, 95),
        ];
    }
}