<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Achievement;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat Akun Admin untuk Login
        User::create([
            'name' => 'Admin Verdi',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password123'), // Password login
        ]);

        // 2. Insert Data Diri dari CV
        Profile::create([
            'name' => 'Verdi Pangestu',
            'email' => 'pangestuverdi27@gmail.com',
            'phone' => '+62 87721632761',
            'about' => 'Mahasiswa semester 6 Program Studi Teknik Informatika Telkom University Purwokerto yang memiliki minat pada pengembangan web khususnya di bidang frontend development.'
        ]);

        // 3. Insert Skills dari CV
        $skills = ['HTML', 'CSS', 'JavaScript', 'PHP', 'Laravel', 'Bootstrap', 'Python'];
        foreach ($skills as $skill) {
            Skill::create(['name' => $skill]);
        }

        // 4. Insert Achievements / Projects dari CV
        Achievement::create([
            'title' => 'Website GEMAS (Gerakan Monitoring Anak Sehat)',
            'year' => 'Semester 6',
            'description' => 'Mengembangkan tampilan website monitoring kesehatan anak menggunakan HTML, CSS, Bootstrap, JavaScript, dan Laravel.'
        ]);
        Achievement::create([
            'title' => 'Freelance Content Writer - Radar Banyumas',
            'year' => 'Feb 2024 - Sekarang',
            'description' => 'Membuat artikel konten pada website menggunakan WordPress dan mengembangkan fitur CRUD sederhana.'
        ]);
    }
}
