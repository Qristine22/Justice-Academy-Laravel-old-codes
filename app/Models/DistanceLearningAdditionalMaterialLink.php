<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DistanceLearningAdditionalMaterialLink extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'pdf',
        'link',
        'link_name',
        'additional_material_id'
    ];
}
