<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\LessonConstant;
use App\Models\LessonObjective;
use App\school_years;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Throwable;

class LessonController extends Controller
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
        $lesson = Lesson::all();
        $lessonObjectives = LessonObjective::all();
        return view('admin.lessons.lessons', ['lessonObjectives' => $lessonObjectives, 'lesson' => $lesson]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $year = school_years::all();
        $subjects = Subject::all();
        $lessonConstan = LessonConstant::all();
        return view(
            'admin.lessons.create',
            [
                'year' => $year, 'subject' => $subjects,
                'lessonConstan' => $lessonConstan
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'year' => 'required',
                'subject' => 'required',
                'lessonConstan' => 'required',
                'topic' => 'required',
                'fact_week' => 'required',
                'quote_week' => 'required',
                'url' => 'required',
                'lbooklet' => 'required',
                'abooklet' => 'required'
            ],
            //custom message
            [
                'lbooklet.required' => 'The Learning Booklet  field is required.',
                'abooklet.required' => 'The Answer Booklet  field is required.'
            ]
        );

        $year = school_years::find($request->year);
        $subject  = Subject::find($request->subject);


        $file_name = pathinfo($request->file('lbooklet')->getClientOriginalName(), PATHINFO_FILENAME); // like file
        $extension = pathinfo($request->file('lbooklet')->getClientOriginalName(), PATHINFO_EXTENSION); // like jpg

        $learningFilePath = Storage::putFileAs(
            'uploads/Learning Booklet',
            $request->file('lbooklet'),
            $year->name . '/' .  $subject->name . '/' . $file_name . rand() . '.' . $extension
        );

        $answerFileName      = pathinfo($request->file('abooklet')->getClientOriginalName(), PATHINFO_FILENAME); // like file
        $answerFileExtension = pathinfo($request->file('abooklet')->getClientOriginalName(), PATHINFO_EXTENSION); // like jpg

        $answertfilePath = Storage::putFileAs(
            'uploads/Learning Booklet',
            $request->file('abooklet'),
            $year->name . '/' .  $subject->name . '/' . $answerFileName . rand() . '.' . $answerFileExtension
        );
        $lesson = new Lesson(); 
        $lesson->year_id = $request->year;
        $lesson->subject_id = $request->subject;
        $lesson->lesson_id = $request->lessonConstan;
        $lesson->topic = $request->topic;
        $lesson->fact_week = $request->fact_week;
        $lesson->quote_week = $request->quote_week;
        $lesson->url = $request->url;
        $lesson->learning_path = $learningFilePath;
        $lesson->answer_path = $answertfilePath;
        $lesson->user_id = auth()->user()->id;
        $lesson->save();
        $lesson_id = $lesson->id;

        foreach ($request->objective as $item) {
            $lessonObjective = new LessonObjective();
            $lessonObjective->lesson_id = $lesson_id;
            $lessonObjective->name = $item;
            $lessonObjective->save();
        }
        return redirect('/lesson')->with('success', 'Lesson added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function learningDownload($id)
    {
        $leason = Lesson::find($id);
        return Storage::download($leason->learning_path);
    }

    public function answerDownload($id)
    {
        $leason = Lesson::find($id);
        return Storage::download($leason->answer_path);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lesson = Lesson::findOrFail($id);

        $lessonObjective  = LessonObjective::where('lesson_id', $lesson->id)->get();
        $year = school_years::all();
        $subjects = Subject::all();
        $lessonConstan = LessonConstant::all();
        return view(
            'admin.lessons.edit',
            [
                'lesson' => $lesson,
                'lessonObjective' => $lessonObjective,
                'year' => $year, 'subject' => $subjects,
                'lessonConstan' => $lessonConstan
            ]
        );
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

        $year = school_years::find($request->year);
        $subject  = Subject::find($request->subject);


        $request->validate([
            'year' => 'required',
            'subject' => 'required',
            'lessonConstan' => 'required',
            'topic' => 'required',
            'fact_week' => 'required',
            'quote_week' => 'required',
            'url' => 'required'
        ]);
        $lesson = Lesson::findorfail($id);
        $lesson->year_id = $request->year;
        $lesson->subject_id = $request->subject;
        $lesson->lesson_id = $request->lessonConstan;
        $lesson->topic = $request->topic;
        $lesson->fact_week = $request->fact_week;
        $lesson->quote_week = $request->quote_week;
        $lesson->url = $request->url;
        $lesson->user_id = auth()->user()->id;



        if ($request->file('lbooklet') != NULL) {



            $file_name = pathinfo($request->file('lbooklet')->getClientOriginalName(), PATHINFO_FILENAME); // like file
            $extension = pathinfo($request->file('lbooklet')->getClientOriginalName(), PATHINFO_EXTENSION); // like jpg

            $learningFilePath = Storage::putFileAs(
                'uploads/Learning Booklet',
                $request->file('lbooklet'),
                $year->name . '/' .  $subject->name . '/' . $file_name . rand() . '.' . $extension
            );

            $lesson->learning_path = $learningFilePath;
        }


        if ($request->file('abooklet') != NULL) {
            $answerFileName      = pathinfo($request->file('abooklet')->getClientOriginalName(), PATHINFO_FILENAME); // like file
            $answerFileExtension = pathinfo($request->file('abooklet')->getClientOriginalName(), PATHINFO_EXTENSION); // like jpg

            $answertfilePath = Storage::putFileAs(
                'uploads/Learning Booklet',
                $request->file('abooklet'),
                $year->name . '/' .  $subject->name . '/' . $answerFileName . rand() . '.' . $answerFileExtension
            );
            $lesson->answer_path  = $answertfilePath;
        }
        $lesson->save();
        $lesson_id = $lesson->id;

        LessonObjective::where('lesson_id', $id)->delete();


        foreach ($request->objective as $item) {
            $lessonObjective = new LessonObjective();
            $lessonObjective->lesson_id = $lesson_id;
            $lessonObjective->name = $item;
            $lessonObjective->save();
        }

        return redirect('/lesson')->with('success', 'Lesson updated');
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
            LessonObjective::where('lesson_id', $id)->delete();
            $lesson = Lesson::findorfail($id);
            $lesson->delete($id);

            Storage::delete([$lesson->answer_path, $lesson->learning_path]);
            return redirect('/lesson')->with('success', 'Lesson Deleted');
        } catch (Throwable $e) {
            $validator = Validator::make([], []);

            return  redirect('/lesson')->with('errors', $validator->errors()
                ->add('errors', "Can't delete a parent, it has related data"));
        }
    }
}
