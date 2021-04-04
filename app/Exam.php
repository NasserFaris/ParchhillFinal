<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    //

    public function getStudentsHaveExamByParentId($parent_id)
    {
        return  Exam::where('parent_id', $parent_id)
            ->get();
    }


    public function students()
    {
        return $this->hasMany('App\Models\Student', 'id')->get();
    }

    public function parents()
    {
        return $this->hasMany('App\Models\Parents', 'parent_id')->get();
    }
}
