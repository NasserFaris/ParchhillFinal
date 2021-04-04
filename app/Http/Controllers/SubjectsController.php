<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Throwable;

class SubjectsController extends Controller
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
        $subjects = Subject::all();
        return view('admin.subjects.subjects')->with('subjects', $subjects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subjects.createsubject');
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
        ]);

        $subject = new Subject;
        $subject->name = $request->input('name');
        $subject->user_id = auth()->user()->id;
        $subject->save();

        return redirect('/subject')->with('success', 'Subject Added');
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
        $subject = Subject::find($id);
        return view('admin.subjects.editsubject')->with('subject', $subject);
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
        ]);

        $subject = Subject::find($id);
        $subject->name = $request->input('name');
        $subject->user_id = auth()->user()->id;
        $subject->save();
        return  redirect('/subject')->with('success', 'Subject Updated');
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
            $subject = Subject::find($id);
            $subject->delete();

            return  redirect('/subject')->with('success', 'Subject Deleted');
        } catch (Throwable $e) {
            $validator = Validator::make([], []);

            return  redirect('/subject')->with('errors', $validator->errors()
                ->add('errors', "Can't delete a parent, it has related data"));
        }
    }
}
