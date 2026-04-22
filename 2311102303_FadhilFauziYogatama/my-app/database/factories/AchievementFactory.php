<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AchievementFactory extends Factory
{
    public function definition(): array
    {
        return [
            'judul' => $this->faker->sentence(3),
            'deskripsi' => $this->faker->paragraph(),
            'tanggal' => $this->faker->date(),
        ];
    }
}
