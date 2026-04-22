<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Profile
        \App\Models\Profile::create([
            'name' => 'Reza Alvonzo',
            'bio' => 'Mahasiswa Teknik Informatika yang berfokus pada Internet of Things (IoT), Machine Learning, dan solusi teknologi industri.',
            'about' => 'Memiliki pengalaman dalam merancang sistem pemantauan real-time dan pengembangan platform manajemen berbasis web. Terampil dalam integrasi perangkat keras dan lunak untuk menciptakan efisiensi operasional, mulai dari sektor pendidikan hingga peternakan modern skala besar. Disiplin, berorientasi pada data, dan visioner dalam mengimplementasikan teknologi tepat guna.',
            'focus' => 'IoT, Machine Learning, & Industrial Solutions',
            'email' => 'reza@example.com',
            'phone' => '+62 812-3456-7890',
            'address' => 'Purwokerto, Indonesia',
        ]);

        // Skills
        $skills = [
            ['name' => 'IoT (ESP32/Sensors)', 'category' => 'Technical', 'level' => 95],
            ['name' => 'Artificial Intelligence', 'category' => 'Technical', 'level' => 85],
            ['name' => 'Computer Vision', 'category' => 'Technical', 'level' => 80],
            ['name' => 'Web Development', 'category' => 'Technical', 'level' => 90],
            ['name' => 'Modern Poultry Farming', 'category' => 'Industry', 'level' => 95],
            ['name' => 'Sistem Manajemen Digital', 'category' => 'Industry', 'level' => 88],
            ['name' => 'Analisis Data Industri', 'category' => 'Industry', 'level' => 85],
            ['name' => 'Perencanaan Strategis', 'category' => 'Others', 'level' => 80],
            ['name' => 'Pengembangan Startup', 'category' => 'Others', 'level' => 75],
            ['name' => 'Manajemen Proyek Teknis', 'category' => 'Others', 'level' => 90],
        ];

        foreach ($skills as $skill) {
            \App\Models\Skill::create($skill);
        }

        // Projects
        \App\Models\Project::create([
            'title' => 'Sistem Monitoring Produksi & Distribusi Unggas Berbasis IoT',
            'role' => 'Peneliti Utama (Tugas Akhir)',
            'year' => '2026',
            'description' => 'Merancang dan mengimplementasikan arsitektur IoT menggunakan ESP32 untuk pemantauan kondisi lingkungan kandang secara real-time.',
            'highlights' => '• Merancang dan mengimplementasikan arsitektur IoT menggunakan ESP32 dan berbagai sensor.
• Mengintegrasikan teknologi pemantauan untuk mengoptimalkan efisiensi produksi pada peternakan ayam petelur modern.
• Mengembangkan sistem distribusi data yang transparan untuk memastikan akurasi laporan produksi harian.',
        ]);

        \App\Models\Project::create([
            'title' => 'Sistem Manajemen Sekolah Berbasis Web',
            'role' => 'Lead Developer',
            'year' => '2025',
            'description' => 'Mengembangkan platform digital komprehensif untuk pengelolaan administrasi sekolah.',
            'highlights' => '• Mengembangkan platform digital komprehensif untuk pengelolaan administrasi sekolah yang ditujukan bagi kepala sekolah dan yayasan.
• Membangun arsitektur sistem yang mencakup manajemen data siswa, staf, dan pelaporan keuangan.
• Melakukan presentasi dan demonstrasi produk secara langsung kepada klien.',
        ]);

        \App\Models\Project::create([
            'title' => 'Perencanaan Industri Peternakan Modern (Smart Farming)',
            'role' => 'Inovator & Perencana Sistem',
            'year' => '2024',
            'description' => 'Menyusun konsep tata letak kandang H-Frame otomatis untuk populasi skala besar.',
            'highlights' => '• Menyusun konsep tata letak kandang H-Frame otomatis untuk populasi skala besar (hingga 1 juta ekor).
• Menerapkan prinsip Computer Vision dan AI untuk analisis kesehatan ternak dan otomatisasi pemberian pakan.
• Melakukan simulasi investasi dan analisis kelayakan infrastruktur teknologi.',
        ]);

        // Admin User
        \App\Models\User::create([
            'name' => 'Admin Reza',
            'email' => 'admin@reza.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);
    }
}
