<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    // Kolom-kolom yang diizinkan untuk diisi/diubah
    protected $fillable = [
        'nama_skill',
        'persentase',
    ];
}