<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class examPaper extends Model
{
    
    
    
    // relation

    public function ages()
    {
        return $this->hasMany('App\Models\AgePeriod', 'id', 'agePeriod_id')->get();
    }
}
