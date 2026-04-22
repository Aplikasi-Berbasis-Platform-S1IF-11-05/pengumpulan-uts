<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('users')->where('id', 1)->update([
            'name' => 'Dimas Raditya',
            'email' => 'dimasraditya@student.telkomuniversity.ac.id',
            'password' => Hash::make('password123'), // Anda bisa mengganti ini nanti
        ]);
    }

    public function down(): void
    {
        DB::table('users')->where('id', 1)->update([
            'email' => 'admin@example.com',
        ]);
    }
};
