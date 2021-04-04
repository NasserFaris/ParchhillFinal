<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Worksheet extends Model
{
    //


    public function subjects()
    {
        return $this->hasMany('App\Subject', 'id', 'subject_id')->get();
    }
    public function years()
    {
        return $this->hasMany('App\school_years', 'id', 'year_id')->get();
    }

    public function chapters()
    {
        return $this->hasMany('App\Models\Chapter', 'id', 'chapter_id')->get();
    }
}
