<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Achievement;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Profile (1 saja)
        Profile::factory()->create();

        // Skills (4 data)
        Skill::factory(4)->create();

        // Achievements (3 data)
        Achievement::factory(3)->create();
    }
}