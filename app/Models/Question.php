<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // relation
    public function user()
    {
        return $this->belongsTo('App\user');
    }

    public function stage(){
        return $this->belongsTo('App\stage');
    }
    public function subject(){
        return $this->belongsTo('App\subject');
    }

}
