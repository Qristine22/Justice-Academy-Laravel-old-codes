<?php

namespace App\Helpers;

class Helpers
{
    public static function datesSortHelper ($arr = null){
        $arr = $arr->toArray();
        krsort($arr);
        return collect($arr);
    }
}
