<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Exam;
use App\Exam_question;
use App\Models\Question;


class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         
        $exam_id =   $request->input('exam_id');

        // $exam_question = Exam_question::findOrFail($exam_id = 8);
        $Question = DB::table('exam_questions')
            ->join('exams', 'exam_questions.exam_id', '=', 'exams.id')
            ->join('questions', 'exam_questions.question_id', '=', 'questions.id')

            ->select(
                'exam_questions.id',
                'exam_questions.exam_id',
                'exam_questions.question_id',
                'questions.question',
                'questions.answer1',
                'questions.answer2',
                'questions.answer3', 
                'questions.subject_id'
            )
            ->where('exam_questions.exam_id', $exam_id)
            ->orderBy('questions.subject_id', 'ASC')
            ->get();

        // var_dump($Question);

         return view('exam.createExam')->with('Question', $Question);



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo 'da';
        // print_r($request);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // echo 'dsasasa';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $exam_id =  $request->input('exam_id');
        $q_id =  $request->input('question_id');
        $q_answer =  $request->input('question_answer');
        DB::table('exam_questions')->where(['exam_id' =>  $exam_id, 'question_id' => $q_id])
            ->update(['answer' => $q_answer]);

        if ($request->input('finsh_status') == 'true') {
            $exam_question =   Exam_question::where('exam_id', $exam_id)->get();
            $total_right = 0;
            foreach ($exam_question as $q) {
                $assessment = Question::find($q->question_id);
                if ($q->answer == $assessment->rightanswer) {
                    echo 'True';
                    $total_right++;
                } else {
                    echo 'false';
                }
            }
            $mytime = Carbon::now();
            $end_date =  $mytime->toDateTimeString();
            $exam = Exam::find($exam_id);
            $exam->total_right = $total_right;
            $exam->end_date = $end_date;
            $exam->save();
            // print_r($exam_question);
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
