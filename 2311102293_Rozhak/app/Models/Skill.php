<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Skill extends Model {
    use HasFactory;

    protected $fillable = [
        'data_diri_id', 
        'name',
        'level',
        'category',
    ];

    public function dataDiri(): BelongsTo {
        return $this->belongsTo(DataDiri::class, 'data_diri_id');
    }
}