<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FrequentlyAskedQuestion extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'title_en',
        'title_am',
        'title_ru',
        'text_en',
        'text_am',
        'text_ru',
    ];
}
