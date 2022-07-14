<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Worker extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'name_en',
        'name_am',
        'name_ru',
        'position_en',
        'position_am',
        'position_ru',
        'biography_en',
        'biography_am',
        'biography_ru',
    ];

    public static function workers(){
        return Worker::with('imgs')->paginate(5, ['*'], 'workers');
    }

    public function imgs(){
        return $this->hasMany(WorkersImg::class, 'worker_id', 'id');
    }
}
