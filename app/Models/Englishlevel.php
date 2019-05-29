<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Englishlevel extends Model
{
    public static function idName(){
        $eng = Englishlevel::all('id','english_level');
        return $eng;
    }
}
