<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\school_years;
use Illuminate\Support\Facades\Validator;
use Throwable;

class SchoolYearController extends Controller
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
        $year = school_years::all();
        return view('admin.schoolYear.schoolyears')->with('year', $year);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.schoolYear.createschoolyear');
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
            'name' => 'required',
            'description' => 'required'
        ]);
        $year = new school_years;
        $year->name = $request->input('name');
        $year->description = $request->input('description');
        $year->user_id = auth()->user()->id;
        $year->save();
        return redirect('/schoolyear')->with('success', 'School year Added');
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
        $year = school_years::find($id);
        return view('admin.schoolYear.editschoolyear')->with('year', $year);
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
            'name' => 'required',
            'description' => 'required'
        ]);
        $year = school_years::find($id);
        $year->name = $request->name;
        $year->description = $request->description;
        $year->user_id = auth()->user()->id;
        $year->save();
        return redirect('/schoolyear')->with('success', 'School year Updated');
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

            $year = school_years::find($id);
            $year->delete();
            return redirect('/schoolyear')->with('success', 'Successfully deleted');
        } catch (Throwable $e) {
            $validator = Validator::make([], []);

            return  redirect('/schoolyear')->with('errors', $validator->errors()
                ->add('errors', "Can't delete a parent, it has related data"));
        }
    }
}
