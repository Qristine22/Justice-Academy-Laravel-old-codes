<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Partner extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'name_en',
        'name_am',
        'name_ru',
        'logo',
        'category',
        'description_en',
        'description_am',
        'description_ru',
    ];
        
    public static function partner(){
        return PartnersLink::with('links')->paginate(5);
    }

    public function links(){
        return $this->hasMany(PartnersLink::class, 'partner_id', 'id');
    }
}
