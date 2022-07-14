<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BehaviorRule extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'name_en',
        'name_am',
        'name_ru',
        'pdf',
    ];
}
