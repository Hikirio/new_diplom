<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public static function idName(){
        $ids = Language::all('name','id');
        return $ids;
    }
}
