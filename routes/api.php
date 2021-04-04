<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use App\Settings;
use App\Models\Question;
use App\Exam_question;
use App\Exam;
use App\Models\Parents;
use Illuminate\Support\Facades\Auth;

// use  Auth;

Route::group(['middlware' => 'api'], function () {
    
    Route::get('settings/questiontime', function () {
        return Settings::orderBy('id', 'desc')->first();
    });

    Route::put('answer', function (Request $request) {
        $q_id =  $request->input('exam_question_id');
        $q_answer =  $request->input('question_answer');

        DB::table('exam_questions')->where('id', $q_id)
            ->update(['answer' => $q_answer]);
        return 'OK';
    });

    Route::get('answered/{id}', function ($id) {
        $exam_result = Exam_question::find($id);
        return $exam_result;
    });

    Route::put('finsish_assessment', function (Request $request) {
        $exam_id =  $request->input('exam_id');
        $exam_question =   Exam_question::where('exam_id', $exam_id)->get();
        $total_right = 0;
        $total_math_right = 0;
        $total_english_right = 0;
        $exam_answer = [];

        foreach ($exam_question as $q) {
            $assessment = Question::find($q->question_id);
            if ($q->answer == $assessment->rightanswer) {
                $total_right++;
                array_push($exam_answer, ['id' => $q->id, 'is_true' => 'T']);
                if ($assessment->subject_id == 1) {
                    $total_english_right++;
                } else {
                    $total_math_right++;
                }
            } else {
                array_push($exam_answer, ['id' => $q->id, 'is_true' => 'F']);
            }
        }

        $mytime = Carbon::now();
        $end_date =  $mytime->toDateTimeString();
        $exam = Exam::find($exam_id);

        $total_time =  Carbon::now()->diffInSeconds($exam->start_date); // decimal second   
        $exam->total_time = $total_time; // decimal second        
        $exam->total_right = $total_right;
        $exam->total_english_right = $total_english_right;
        $exam->total_math_right = $total_math_right;
        $exam->end_date = $end_date;
        $exam->save();
        return ['exam_answer' => $exam_answer, 'total_time' => $exam->total_time];
    });

    Route::put('tryAgain', function (Request $request) {
        $exam_id =  $request->input('exam_id');
        DB::table('exam_questions')->where('exam_id', $exam_id)
            ->update(['answer' => NULL]);
        $exam = Exam::find($exam_id);
        $exam->total_right = 0;
        $exam->total_time = "";
        $exam->start_date = Carbon::now()->toDateTimeString();
        $exam->end_date = null;
        $exam->save();
        return 'OK';
    });
    Route::post('parentLogin', function (Request $request) {



        $credentials = [
            'email' => $request->input('username'),
            'password' => $request->input('password'),
        ];


        if (Auth::guard('parent')->attempt($credentials)) {
            $parent_id = Auth::guard('parent')->user()->id;
            return [Auth::guard('parent')->user()];
        }

/*

        $email = $request->input('username');
        $password =  $request->input('password');

        $parent = Parents::where(['email' => $email, 'password' => $password])->get();
        if (empty($parent)) {
            return 'Email or parent name is error';
        } else {
            return $parent;
        }
        */
    });
});









Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
