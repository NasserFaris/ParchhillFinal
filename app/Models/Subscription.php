<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Subscription extends Model
{
    //

    public function studentSubscribtionByParentId($parent_id)
    {
        return DB::table('students')
            ->join('subscriptions', 'subscriptions.student_id', '=', 'students.id')
            ->where('students.parent_id', $parent_id)
            ->get();
    }

    public function packages()
    {
        return $this->hasMany('App\Models\Package', 'id', 'package_id')->get();
    }

    public function student()
    {
        return $this->hasMany('App\Models\Student','id', 'student_id')->get();
    }
}
