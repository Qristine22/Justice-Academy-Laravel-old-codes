<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VideoLecture extends Model
{
    use HasFactory;
    use SoftDeletes;
        
    protected $fillable = [
        'topic_en',
        'topic_am',
        'topic_ru',
        'lecturer_en',
        'lecturer_am',
        'lecturer_ru',
        'video',
    ];
}
