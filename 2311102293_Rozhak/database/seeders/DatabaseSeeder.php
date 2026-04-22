<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\DataDiri;
use App\Models\Skill;
use App\Models\Pencapaian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    use WithoutModelEvents;

    public function run(): void {

        // Buat Akun Admin
        User::create([
            'name' => 'Rozhak',
            'email' => 'rozhak@rozhak.xyz',
            'password' => bcrypt('password123'),
        ]);

        // Buat Data Diri Awal
        $dataDiri = DataDiri::create([
            'name' => 'Rozhak',
            'email' => 'rozhak@rozhak.xyz',
            'phone' => '+628123456789',
            'alamat' => 'Indonesia',
            'bio' => 'Mahasiswa Teknik Informatika',
            'github_url' => 'https://github.com/rozhak',
            'linkedin_url' => 'https://linkedin.com/in/rozhak',
        ]);

        // Tambah Skill Awal
        Skill::create([
            'data_diri_id' => $dataDiri->id,
            'name' => 'Laravel',
            'level' => 'Intermediate',
            'category' => 'Web Development',
        ]);

        // Tambah Pencapaian Awal
        Pencapaian::create([
            'data_diri_id' => $dataDiri->id,
            'name' => 'Sertifikat Praktikum Web',
            'description' => 'Berhasil menyelesaikan praktikum pemrograman web',
            'date' => now(),
            'category' => 'Akademik',
        ]);
    }
}
