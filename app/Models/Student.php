<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{


    /**
     * Get the user's full name.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }
    public function getStudentsWithParentId($parent_id)
    {
        return  Student::where('parent_id', $parent_id)
            ->get();
    }
    public function getStudentsHaveExamByParentId($parent_id)
    {
        return DB::table('students')
            ->join('exams', 'exams.student_id', '=', 'students.id')
            ->where('exams.parent_id', $parent_id)
            ->get();
    }
    /*
    */

    public function parent()
    {
        return $this->belongsTo('App\Models\Parents', 'parent_id', 'id')->get();
    }
    public function subscription()
    {
        return $this->hasMany('App\Models\Subscription', 'student_id')->get();
    }
    public function years()
    {
        return $this->hasMany('App\school_years', 'id', 'year')->get();
    }
    
}
