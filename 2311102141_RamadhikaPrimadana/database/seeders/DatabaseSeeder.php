<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Membuat 1 akun admin permanen
        User::create([
            'name' => 'Admin Portofolio',
            'email' => 'admin@portofolio.com',
            'password' => Hash::make('password123'), // Password untuk login
        ]);
    }
}