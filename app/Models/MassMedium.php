<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MassMedium extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'text_en',
        'text_am',
        'text_ru',
        'year',
    ];
    
    public static function massMidia(){
        return MassMedium::with('links')->paginate(10);
    }

    public static function massMidiaYear($year){
        return MassMedium::with('links')->where('year', $year)->get();
    }

    public function links(){
        return $this->hasMany(MassMediaLink::class, 'mass_media_id', 'id');
    }
}
