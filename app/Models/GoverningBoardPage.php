<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GoverningBoardPage extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'text_en',
        'text_am',
        'text_ru',
    ];
}
