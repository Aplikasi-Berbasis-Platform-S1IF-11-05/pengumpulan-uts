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
        \App\Models\Profile::create([
            'name' => 'Willyan Hyuga Pratama',
            'bio' => 'Mahasiswa Teknik Informatika yang berfokus pada Desain, Machine Learning dan Solusi Teknologi Digital. Memiliki pengalaman dalam merancang Sistem Kunjungan pada salah satu Instansi',
            'email' => 'willyan@example.com',
            'location' => 'Purwokerto, Indonesia',
        ]);

        \App\Models\Skill::create(['name' => 'Machine Learning', 'category' => 'Technical', 'level' => 85]);
        \App\Models\Skill::create(['name' => 'UI/UX Design', 'category' => 'Technical', 'level' => 90]);
        \App\Models\Skill::create(['name' => 'Front-End Development', 'category' => 'Technical', 'level' => 80]);

        \App\Models\Project::create([
            'title' => 'Prediksi Stok Toko Bangunan Menggunakan Algoritma Random Forest',
            'description' => 'Merancang Sistem Informasi dengan fitur prediksi untuk Toko Bangunan. Meneliti perbandingan hasil menggunakan algoritma vs insting pemilik.',
            'role' => 'Peneliti Utama (Tugas Akhir)',
            'year' => '2025',
            'type' => 'achievement'
        ]);

        \App\Models\Project::create([
            'title' => 'Sistem Kunjungan ICONPLUS Purwokerto',
            'description' => 'Merancang platform digital untuk pengelolaan kunjungan ICONPLUS yang ditujukan bagi Manajer dan Rekap Bulanan. Membangun arsitektur sistem yang mencakup manajemen data pelanggan, tim lapangan, dan admin.',
            'role' => 'Front-End',
            'year' => '2024',
            'type' => 'project'
        ]);

        \App\Models\User::create([
            'name' => 'Admin Willy',
            'email' => 'admin@willy.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);
    }
}
