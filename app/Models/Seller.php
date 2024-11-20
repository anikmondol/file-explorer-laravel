<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    //

    function productDate(){
        return $this->hasOne("App\Models\Product");
    }

    function productManyDate(){
        return $this->hasMany("App\Models\Product");
    }

}
