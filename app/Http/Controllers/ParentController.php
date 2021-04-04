<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Parents;
use App\school_years;
use App\Models\Question;
use App\Settings;
use App\Exam;
use App\Exam_question;
use App\Models\AgePeriod;
use App\Models\Chapter;
use App\Models\examPaper;
use App\Models\Lesson;
use App\Models\LessonObjective;
use App\Models\Student;
use App\Models\Worksheet;
use App\Subject;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Filesystem\FileNotFoundException;

use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Throwable;

class ParentController extends Controller
{

    public function __construct()
    {
        $this->middleware('revalidate');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLogin()
    {
        return view('parents.login');
    }
    public function doLogin(Request $request)
    {

        // validate the info, create rules for the inputs
        $rules = array(
            'email'    => 'required|email', // make sure the email is an actual email
            'password' => 'required' //  required|alphaNum|min:3' password can only be alphanumeric and has to be greater than 3 characters
        );
        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('/parent/login')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {
            // create our user data for the authentication
            $credentials = [
                'email' => Input::get('email'),
                'password' => Input::get('password'),
            ];


            if (Auth::guard('parent')->attempt($credentials)) {
                $parent_id = Auth::guard('parent')->user()->id;
                $request->session()->put('parent_id', $parent_id);
                return redirect('/parent/index');
            } else {
                return Redirect::to('/parent/login')
                    ->withErrors('Invali Email or password')
                    ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
            }
        }
    }

    public function doLogout()
    {

        $request = Request();
        $request->session()->forget('parent_id');
        Auth::guard('parent')->logout();

        return Redirect::to('/parent/login'); // redirect the user to the login screen
    }


    public function register()
    {
        $year = school_years::all();
        return view('parents.register')->with(['year' => $year]);
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
            'Parent_Name' => 'required',
            'Phone_Number' => 'required',
            'Email' => 'required|email|unique:parents',
            'Child’s_Name' => 'required',
            'Year' => 'required'
        ]);

        $year = $request->input('Year');


        $data = new Parents;
        $data->parent_name = $request->input('Parent_Name');
        $data->password =   Hash::make($request->input('Parent_Name'));
        $data->phone_number = $request->input('Phone_Number');
        $data->email = $request->input('Email');
        $data->school_year_id = $year;
        $data->save();
        $parent_id = $data->id;

        $request->session()->put('parent_id', $parent_id);

        $student = new Student;
        $student->first_name =  $request->input('Child’s_Name');
        $student->year = $year;
        $student->parent_id = $parent_id;
        $student->save();
        $student_id = $student->id;

        $setting = Settings::orderBy('id', 'desc')->first();

        $randomEnglishQuestion = Question::where(['subject_id' => 1, 'school_year_id' => $year])
            ->inRandomOrder()
            ->limit(($setting->question_count) / 2)
            ->get();

        $randomMathQuestion = Question::where(['subject_id' => 2, 'school_year_id' => $year])
            ->inRandomOrder()
            ->limit(($setting->question_count) / 2)
            ->get();

        $total_count =  count($randomEnglishQuestion)  + count($randomMathQuestion);
        $mytime = Carbon::now();
        $start_date =  $mytime->toDateTimeString();
        $exam = new Exam;
        $exam->parent_id = $parent_id;
        $exam->student_id = $student_id;
        $exam->school_year_id = $year;
        $exam->total_question = $total_count;
        $exam->total_english_question = count($randomEnglishQuestion);
        $exam->total_math_question = count($randomMathQuestion);
        $exam->start_date = $start_date;
        $exam->save();
        $exam_id = $exam->id;


        foreach ($randomEnglishQuestion as $Question) {
            $exam_question = new Exam_question;
            $exam_question->exam_id = $exam_id;
            $exam_question->question_id = $Question->id;
            $exam_question->save();
        };
        foreach ($randomMathQuestion as $Question) {
            $exam_question = new Exam_question;
            $exam_question->exam_id = $exam_id;
            $exam_question->question_id = $Question->id;
            $exam_question->save();
        };


        return redirect()->action(
            'ExamController@create',
            ['exam_id' => $exam_id]
        );
    }

    public function index()
    {
        return view('parents.home.home');
    }

    public function details()
    {



        $parent_id = session('parent_id');
        $parent_details = Parents::find($parent_id);
        $year = school_years::all();
        return view('parents.details', ['year' => $year, 'id' => $parent_id, 'info' => $parent_details]);
    }
    public function updateDetails(Request $request, $id)
    {
        $request->validate([
            'First_Name' => 'required',
            'Last_Name' => 'required',
            'Email_Address' => 'required|email',
            'Password' => 'required',
            'Address' => 'required',
            'Town/City' => 'required',
            'Counrty' => 'required',
            'Post_code' => 'required',
            'Telephone' => 'required'
        ]);


        $parent_details = Parents::find($id);

        // echo $parent_details->getAuthPassword();

        if (!($parent_details->getAuthPassword() == $request->input('Password'))) {
            $parent_details->password       = Hash::make($request->input('Password'));
        }

        // $parent_details->isDirty('password');


        $parent_details->first_name     = $request->input('First_Name');
        $parent_details->last_name      = $request->input('Last_Name');
        $parent_details->email          = $request->input('Email_Address');
        // 
        $parent_details->address        = $request->input('Address');
        $parent_details->town_city      = $request->input('Town/City');
        $parent_details->county         = $request->input('Counrty');
        $parent_details->post_code      = $request->input('Post_code');
        $parent_details->telephone      = $request->input('Telephone');

        // 
        $parent_details->save();

        return redirect('/parent/details')->with('success', 'Details updated');
    }

    public function worksheets()
    {
        // Project::orderBy('name')->get();
        $years = school_years::orderBy('id')->get();
        $subjects  = Subject::all();
        return view('parents.worksheets.worksheets', ['years' => $years, 'subjects' => $subjects]);
    }

    public function chapters($year_id, $subject_id)
    {
        $workSheets = Worksheet::where(['year_id' => $year_id, 'subject_id' => $subject_id])
            ->orderBy('chapter_id')
            ->orderBy('created_at')
            ->get();
        // $chapters = Chapter::all();

        $chapters = new Chapter();
        $chapters = $chapters->hasWorksheet($year_id, $subject_id);

        return view('parents.worksheets.chapters', ['workSheets' => $workSheets, 'chapters' => $chapters]);
    }

    public function notifications()
    {
        return view('parents.notifycations.notifications');
    }
    public function assessment()
    {
        $request = Request();
        $parent_id = $request->session()->get('parent_id');
        $student = new Student();
        $student = $student->getStudentsHaveExamByParentId($parent_id);
        return view('parents.assessments.assessments', ['students' => $student]);
    }
    public function lbooklets()
    {
        $years = school_years::all();
        return view(
            'parents.learning-booklets.learning-booklets',
            ['years' => $years]
        );
    }

    public function lesson($year_id, $subject_id, $lesson_id)
    {
        $lesson = Lesson::where(['year_id' => $year_id, 'subject_id' => $subject_id, 'lesson_id' => $lesson_id])
            ->get();
        if (count($lesson) > 0) {
            $objective = LessonObjective::where('lesson_id', $lesson[0]->id)->get();
            return response()->json(['lesson' => $lesson, 'objective' => $objective]);
        }
        return response()->json(['Error' => 'There are no lesson for selected year and subject']);

        // return view('parents.worksheets.chapters', ['workSheets' => $workSheets, 'chapters' => $chapters]);
    }



    public function examPaper()
    {
        return view('parents.examp-paper.examp-paper');
    }

    public function examsByAges($id)
    {
        $age = AgePeriod::findorfail($id);

        $papers = examPaper::where('agePeriod_id', $id)
            ->orderBy('title', 'asc')
            ->get();
        if ($id == 9) {
            return view('parents.examp-paper.ages-gcse-paper', ['papers' => $papers, 'age' => $age]);
        } else {
            return view('parents.examp-paper.ages-paper', ['papers' => $papers, 'age' => $age]);
        }
    }
}
