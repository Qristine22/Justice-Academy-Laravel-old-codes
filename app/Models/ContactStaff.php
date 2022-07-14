<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactStaff extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'position_en',
        'position_am',
        'position_ru',
        'name_en',
        'name_am',
        'name_ru',
        'mail',
        'phone',
    ];
}
