<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'role', 'about', 'photo_path', 'nim', 'program_studi', 'universitas', 'ipk', 'email', 'cv_link', 'github', 'linkedin', 'telegram', 'web', 'whatsapp'];
}
