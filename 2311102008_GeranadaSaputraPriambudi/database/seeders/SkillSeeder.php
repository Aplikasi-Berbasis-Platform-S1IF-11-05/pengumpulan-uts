<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            ['name' => 'UI / UX Designer', 'category' => 'Technical'],
            ['name' => 'Front-end Web Developer', 'category' => 'Technical'],
            ['name' => 'Fiber Optic', 'category' => 'Technical'],
            ['name' => 'Digital Marketing', 'category' => 'Technical'],
            ['name' => 'Team Collaboration', 'category' => 'Professional'],
            ['name' => 'Project Coordination', 'category' => 'Professional'],
            ['name' => 'Indonesian (Native)', 'category' => 'Languages'],
            ['name' => 'English (Intermediate)', 'category' => 'Languages'],
        ];

        foreach ($skills as $skill) {
            \App\Models\Skill::create($skill);
        }
    }
}
