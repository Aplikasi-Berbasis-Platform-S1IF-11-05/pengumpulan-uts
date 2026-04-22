<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Achievement;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin User
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);

        // Initial Profile
        Profile::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'phone' => '08123456789',
            'address' => 'Jakarta, Indonesia',
            'about_me' => 'I am a passionate software engineer with a focus on web development.',
        ]);

        // Initial Skills
        Skill::create(['name' => 'PHP', 'level' => 90]);
        Skill::create(['name' => 'Laravel', 'level' => 85]);
        Skill::create(['name' => 'JavaScript', 'level' => 80]);
        Skill::create(['name' => 'Tailwind CSS', 'level' => 75]);

        // Initial Achievements
        Achievement::create([
            'title' => 'First Place in Hackathon',
            'description' => 'Won the first place in the 2023 City Hackathon.',
            'date' => '2023-05-20',
        ]);
        Achievement::create([
            'title' => 'Certified Laravel Developer',
            'description' => 'Successfully passed the Laravel certification exam.',
            'date' => '2022-11-15',
        ]);
    }
}
