<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory; // 🔥 WAJIB

    protected $fillable = [
        'nama',
        'asal',
        'sekolah',
        'tanggal_lahir',
        'deskripsi'
    ];
}