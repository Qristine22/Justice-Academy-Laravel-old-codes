<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MassMediaLink extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'site_name',
        'link_name',
        'link',
        'mass_media_id',
    ];
}
