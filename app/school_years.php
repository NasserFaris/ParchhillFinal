<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class school_years extends Model
{
    //

    public function assessments(){
        return $this->hasMany('App\assessment');
    }
}
