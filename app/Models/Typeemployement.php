<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typeemployement extends Model
{
    public static function idName(){
        $t_empl = Typeemployement::all('id','type_employment');
        return $t_empl;
    }
}
