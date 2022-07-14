<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DistanceLearningAdditionalMaterial extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name_en',
        'name_am',
        'name_ru',
        'course_id'
    ];

    public static function additionalMaterial(){
        return DistanceLearningAdditionalMaterial::with('links')->paginate(10);
    }
    public static function additionalMaterialSingle($id){
        return DistanceLearningAdditionalMaterial::with('links')->where('course_id', $id)->get();
    }
    public function links(){
        return $this->hasMany(DistanceLearningAdditionalMaterialLink::class, 'additional_material_id', 'id');
    }
}
