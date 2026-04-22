<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $fillable = [
        'title',   // skill
        'author',  // data diri
        'type'     // achievement
    ];

    // Optional biar lebih readable
    public function getSkillAttribute()
    {
        return $this->title;
    }

    public function getNamaAttribute()
    {
        return $this->author;
    }

    public function getAchievementAttribute()
    {
        return $this->type;
    }
}