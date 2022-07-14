<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'bg',
        'title_en',
        'title_am',
        'title_ru',
        'description_en',
        'description_am',
        'description_ru',
        'date',
    ];
    

    public static function news(){
        return News::with('imgs')->paginate(5);
    }

    public function imgs(){
        return $this->hasMany(NewsImg::class, 'news_id', 'id');
    }
}
