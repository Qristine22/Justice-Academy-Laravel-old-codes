<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'text_en',
        'text_am',
        'text_ru',
        'full_date',
        'year',
    ];


    public static function gallery(){
        return Gallery::with('imgs')->orderBy('id', 'DESC')->paginate(10, ['*'], 'galleries');
    }
    
    public static function galleryAll($year){
        return Gallery::with('imgs')->where('year', $year)->get();
    }

    public function imgs(){
        return $this->hasMany(GalleryImgs::class, 'gallery_id', 'id');
    }
}
