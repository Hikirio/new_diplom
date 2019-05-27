<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    public static function idName(){
        $experience = Experience::all('id','num','year');
        return $experience;
    }
}
