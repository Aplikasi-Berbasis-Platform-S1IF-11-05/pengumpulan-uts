<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DataDiri extends Model {
    use HasFactory;

    protected $table = 'data_diris';
    
    protected $fillable = [
        'name', 
        'email',
        'phone',
        'alamat', 
        'bio',
        'photo_url',
        'github_url',
        'linkedin_url',
    ];

    public function skills(): HasMany {
        return $this->hasMany(Skill::class);
    }

    public function pencapaians(): HasMany {
        return $this->hasMany(Pencapaian::class);
    }
}