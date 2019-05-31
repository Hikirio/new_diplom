<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    public static function show(){

        $show = Employer::all()->where('id');

        return $show;
    }


}
