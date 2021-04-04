<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Chapter extends Model
{
    //

    public function hasWorksheet($year_id,$subject_id){

        return DB::table('chapters')
        
        ->select('name', 'chapters.id')
        ->join('worksheets', 'chapters.id', '=', 'worksheets.chapter_id')
        ->where(['worksheets.subject_id'=> $subject_id, 'worksheets.year_id'=> $year_id])
        ->distinct()
        ->get();

        
    }
}
