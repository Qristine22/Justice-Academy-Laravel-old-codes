<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class FormerRectorsBiography extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'name_en',
        'name_am',
        'name_ru',
        'position_en',
        'position_am',
        'position_ru',
        'biography_en',
        'biography_am',
        'biography_ru',
        'img',
    ];
}
