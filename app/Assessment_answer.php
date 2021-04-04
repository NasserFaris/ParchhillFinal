<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assessment_answer extends Model
{
    protected $fillable =['student_id' , 'assessment_id', 'question_answer'   ];
}
