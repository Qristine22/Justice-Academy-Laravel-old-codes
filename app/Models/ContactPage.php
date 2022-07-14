<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactPage extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'address_en',
        'address_am',
        'address_ru',
        'mail',
        'phone',
        'map',
    ];
}
