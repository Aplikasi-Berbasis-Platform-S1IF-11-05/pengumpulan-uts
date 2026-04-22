<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pencapaian extends Model {
    use HasFactory;

    protected $fillable = [
        'data_diri_id', 
        'name',
        'description',
        'date',
        'category',
    ];

    public function dataDiri(): BelongsTo {
        return $this->belongsTo(DataDiri::class, 'data_diri_id');
    }
}