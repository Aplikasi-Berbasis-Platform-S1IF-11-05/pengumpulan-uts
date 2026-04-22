<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name',
        'bio',
        'about',
        'focus',
        'photo',
        'email',
        'phone',
        'address',
        'cv_path',
    ];
}
