<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Subject;
// use App\Stage;

use App\school_years;

use App\User;
use Illuminate\Support\Facades\Validator;
use Throwable;

class QuestionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Questions = Question::orderBy('school_year_id', 'DESC')->get();;
        // print_r($Questions);
        $user = User::all();
        $subject = Subject::all();
        $years = school_years::all();

        return view('admin.questions.questions')->with(['Questions' => $Questions, 'user' => $user, 'subjects' => $subject, 'years' => $years]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subject = Subject::all();
        $year = school_years::all();

        return view('admin.questions.create')->with(['subject' => $subject, 'year' => $year]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'Subject' => 'required',
            'Year' => 'required',
            'Question' => 'required',
            'Answer_1' => 'required',
            'Answer_2' => 'required',
            'Answer_3' => 'required',
            'Right_Answer' => 'required',
        ]);

        $Question = new Question;
        $Question->subject_id  = $request->input('Subject');
        $Question->school_year_id = $request->input('Year');
        $Question->question = $request->input('Question');
        $Question->answer1 = $request->input('Answer_1');
        $Question->answer2 = $request->input('Answer_2');
        $Question->answer3 = $request->input('Answer_3');
        $Question->rightanswer = $request->input(str_replace(' ', '_', $request->input('Right_Answer')));
        $Question->user_id = auth()->user()->id;
        $Question->save();

        return redirect('/questions')->with('success', 'Questions Added');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject = Subject::all();
        $year = school_years::all();
        $Question = Question::findOrFail($id);

        return view('admin.questions.edit')->with(['questions' => $Question, 'subject' => $subject, 'year' => $year]);
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

        $request->validate([
            'Subject' => 'required',
            'Year' => 'required',
            'Question' => 'required',
            'Answer_1' => 'required',
            'Answer_2' => 'required',
            'Answer_3' => 'required',
            'Right_Answer' => 'required',
        ]);

        $Question = Question::findorfail($id);
        $Question->subject_id         = $request->input('Subject');
        $Question->school_year_id     = $request->input('Year');
        $Question->question = $request->input('Question');
        $Question->answer1 = $request->input('Answer_1');
        $Question->answer2 = $request->input('Answer_2');
        $Question->answer3 = $request->input('Answer_3');
        $Question->rightanswer = $request->input(str_replace(' ', '_', $request->input('Right_Answer')));
        $Question->user_id = auth()->user()->id;
        $Question->save();

        return redirect('/questions')->with('success', 'Questions Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {

            $Question = Question::findorfail($id);
            $Question->delete($id);

            return redirect('/questions')->with('success', 'Questions Deleted');
        } catch (Throwable $e) {
            $validator = Validator::make([], []);

            return  redirect('/questions')->with('errors', $validator->errors()
                ->add('errors', "Can't delete a parent, it has related data"));
        }
    }
}
