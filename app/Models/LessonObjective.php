<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LessonObjective extends Model
{
    public function lesson()
    {
        return $this->belongsTo('App\Models\Lesson','lesson_id' ,'id' )->get();
    }
}
