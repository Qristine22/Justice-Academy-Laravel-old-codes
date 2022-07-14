<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RectorsDecree extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'info_en',
        'info_am',
        'info_ru',
        'pdf_name',
        'pdf',
    ];
}
