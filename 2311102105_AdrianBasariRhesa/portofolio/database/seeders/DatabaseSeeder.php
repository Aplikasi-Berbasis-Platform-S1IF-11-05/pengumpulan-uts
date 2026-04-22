<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Achievement;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun Admin
        User::create([
            'name' => 'Admin Portofolio',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password123'), // Password login admin
        ]);

        // 2. Data Diri
        Profile::create([
            'name' => 'Adrian Basari Rhesa',
            'nim' => '2311102105',
            'major' => 'Teknik Informatika (IF-11-05)',
            'university' => 'Telkom University Purwokerto',
            'about' => 'Mahasiswa Teknik Informatika dengan ketertarikan mendalam pada Full-stack Web Development dan penerapan Machine Learning.'
        ]);

        // 3. Skills
        Skill::insert([
            ['skill_name' => 'Laravel & PHP', 'category' => 'Web Development'],
            ['skill_name' => 'MySQL', 'category' => 'Database'],
            ['skill_name' => 'Machine Learning (LSTM)', 'category' => 'Data Science'],
        ]);

        // 4. Achievements
        Achievement::insert([
            ['title' => 'Aduin Dong', 'description' => 'Aplikasi web manajemen aduan masyarakat wilayah Kober.', 'year' => '2025'],
            ['title' => 'GEMAS', 'description' => 'Sistem informasi berbasis web untuk monitoring data posyandu remaja.', 'year' => '2026'],
            ['title' => 'Es Taad', 'description' => 'Project bisnis F&B berbasis minuman susu.', 'year' => '2026'],
        ]);
    }
}