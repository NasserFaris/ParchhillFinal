<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Subscription;
use App\school_years;

class StudentController extends Controller
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
    public function index()
    {

        $students = Student::where('parent_id', session('parent_id'))->get();
        $package = Package::orderBy('id');
        $years = school_years::all();

        return view('parents.student.student')->with(['students' => $students, 'years' => $years, 'package' => $package]);
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $input = $request->all();
        $student = new Student;
        $student->first_name = $request->input('First_Name');
        $student->last_name = $request->input('Last_Name');
        $student->parent_id = $request->session()->get('parent_id');
        $student->year = $request->input('Year');
        $student->save();
        $student_id = $student->id;

        $sub = new Subscription();
        $sub->student_id = $student_id;
        $sub->package_id = $request->changegrade;
        $sub->status = $request->status;
        $sub->total_per_year = $request->total_per_year;
        $sub->renewal_date = $request->renewl_date;

        $sub->save();
        return  redirect('/parent/student')->with('success', 'Student added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::findorfail($id);

        $sub =  Subscription::where('student_id', $id)->latest()->get();
        $package = Package::orderBy('id');
        $years = school_years::all();
        return view(
            'parents.student.edit',
            [
                'student' => $student, 'years' => $years,
                'package' => $package, 'subscription' => !empty($sub[0]) ? $sub[0] : []
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

        // student details
        $student = Student::findorfail($id);
        $student->first_name = $request->input('First_Name');
        $student->last_name = $request->input('Last_Name');
        $student->parent_id = $request->session()->get('parent_id');
        $student->year = $request->input('Year');
        $student->save();
        // save student subscription

        $subs =  Subscription::where('student_id', $id)->latest()->get();
        if (count($subs) > 0 ) {
            $sub =  Subscription::find($subs[0]->id);


            $sub->package_id = $request->changegrade;
            $sub->status = $request->status;
            $sub->total_per_year = $request->total_per_year;
            $sub->renewal_date = $request->renewl_date;

            //  If there are any change in subscriptin details -- complete
            $changed =  $sub->isDirty();
            if ($changed) {
                $this->newSubscription($request, $id);
            }
        } else {
            $this->newSubscription($request, $id);
        }

        //  add new sutedent subscripton 
        return  redirect('/parent/student')->with('success', 'Student updated');
    }


    private function newSubscription($request, $student_id)
    {
        $sub = new Subscription();
        $sub->student_id = $student_id;
        $sub->package_id = $request->changegrade;
        $sub->status = $request->status;
        $sub->total_per_year = $request->total_per_year;
        $sub->renewal_date = $request->renewl_date;
        $sub->save();
    }
}
