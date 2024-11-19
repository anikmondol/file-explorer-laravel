<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table = "students";

    function getNameAttribute($val)
    {
        return ucfirst($val);
    }

    function getPhoneAttribute($val)
    {
        return "+".$val;
    }


    function setNameAttribute($val)
    {
        $this->attributes['name']=ucfirst($val);
    }

}
