<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin User
        \App\Models\User::create([
            'name' => 'Admin Portfolio',
            'email' => 'admin@portfolio.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);

        // Initial Profile
        \App\Models\Profile::create([
            'name' => 'Rasyid Nafsyarie',
            'email' => 'rasyid@example.com',
            'phone' => '+62 812 3456 7890',
            'address' => 'Purwokerto, Indonesia',
            'bio' => 'Sophisticated Developer & UI Architect',
            'about_title' => 'The Vision',
            'about_description' => 'A stark approach to digital craftsmanship. Focused on minimal aesthetics and robust performance.',
        ]);

        // Initial Skills
        \App\Models\Skill::create(['name' => 'Laravel', 'category' => 'Backend', 'level' => 90]);
        \App\Models\Skill::create(['name' => 'Tailwind CSS', 'category' => 'Frontend', 'level' => 95]);
        \App\Models\Skill::create(['name' => 'Architecture', 'category' => 'Design', 'level' => 85]);

        // Initial Achievements
        \App\Models\Achievement::create([
            'title' => 'Best UI Award',
            'description' => 'Won first place for minimal design architecture.',
            'year' => '2025',
        ]);
    }
}
