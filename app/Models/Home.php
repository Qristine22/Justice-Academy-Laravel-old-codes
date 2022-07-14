<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Home extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'logo',
        'bg',
        'rectors_img',
        'title_en',
        'title_am',
        'title_ru',
        'rectors_word_en',
        'rectors_word_am',
        'rectors_word_ru',
        'rectors_signature',
    ];
}
