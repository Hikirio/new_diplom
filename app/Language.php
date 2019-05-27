<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public static function findId(){
        $ids = Language::all('name','id');
        return $ids;
    }
}
