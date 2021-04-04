<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function subjects()
    {
        return $this->hasMany('App\Subject', 'id', 'subject_id')->get();
    }
    public function years()
    {
        return $this->hasMany('App\school_years', 'id', 'year_id')->get();
    }
    public function lesson()
    {
        return $this->hasMany('App\Models\LessonConstant', 'id', 'lesson_id')->get();
    }
    public function objective()
    {
        return $this->hasMany('App\Models\LessonObjective', 'lesson_id', 'id')->get();
    }
}
