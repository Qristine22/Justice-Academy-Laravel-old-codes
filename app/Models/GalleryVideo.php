<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GalleryVideo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'text_en',
        'text_am',
        'text_ru',
        'full_date',
        'year',
        'link',
    ];
}
