<?php

namespace App\Http\Controllers;

use App\Models\examPaper;
use App\Models\Lesson;
use App\Models\Worksheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Throwable;

class DownloadFile extends Controller
{
    

/*
    WorkSheet
*/
    public function workSheet($id)
    {
        $worksheet = Worksheet::find($id);
        return Storage::download($worksheet->file_path);
    }

    /**
     * Display the specified resource.
     * Exam Paper
     */
    public function examsDownload($id, $type)
    {
        $paper = examPaper::find($id);
        return Storage::download($paper->$type);
    }

    public function learningDownload($id)
    {
        try {

            $leason = Lesson::find($id);
            return Storage::download($leason->learning_path);
        } catch (Throwable $e) {
            abort(404); //or whatever you want do here
        }
    }

    public function answerDownload($id)
    {
  
        try {
            $leason = Lesson::find($id);
            return Storage::download($leason->answer_path);
        } catch (Throwable $e) {
            abort(404); //or whatever you want do here
        }
    }
    
}
