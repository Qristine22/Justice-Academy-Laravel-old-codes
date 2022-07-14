<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DistanceLearningBook extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name_en',
        'name_am',
        'name_ru',
        'img',
        'course_id',
    ];

        
    public static function books(){
        return DistanceLearningBook::with('pdfs')->paginate(10);
    }

    public function pdfs(){
        return $this->hasMany(DistanceLearningBooksPdf::class, 'book_id', 'id');
    }
}
