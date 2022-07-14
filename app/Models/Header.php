<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Header extends Model
{
    use HasFactory;
    use SoftDeletes;
        
    protected $fillable = [
        'name_en',
        'name_am',
        'name_ru',
        'link',
    ];

    public static function headers(){
        return Header::with('subheaders')->get();
    }

    public function subheaders(){
        return $this->hasMany(Subheader::class, 'parent_id', 'id');
    }
}
