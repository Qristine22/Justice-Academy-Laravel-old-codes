<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DistanceLearningCourse extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name_en',
        'name_am',
        'name_ru',
        'syllabus_en',
        'syllabus_am',
        'syllabus_ru',
        'img',
        'syllabus_pdf',
        'syllabus_pdf_name_en',
        'syllabus_pdf_name_am',
        'syllabus_pdf_name_ru',
    ];


    public static function courses(){
        return DistanceLearningCourse::with('books')->get();
    }

    public function books(){
        return $this->hasMany(DistanceLearningBook::class, 'course_id', 'id');
    }
}
