<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    
    

    // relation
    public function user(){
        return $this->belongsTo('App\user');
    }

    public function assessments(){
        return $this->hasMany('App\assessment');
    }
}
