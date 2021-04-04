<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapter;
use Illuminate\Support\Facades\Validator;
use Throwable;

class ChaptersController extends Controller
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
        $chpters = Chapter::all();;
        return view('admin.chapters.chapters',['chpters' => $chpters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.chapters.create');
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
            'Name' => 'required'
        ]);
        $chpter = new Chapter();
        $chpter->name = $request->Name;
        $chpter->save();

        return redirect('/topic')->with('success', 'Topic Added');
    }

    public function show($id)
    {
         
         return redirect('/topic');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chapter = Chapter::findOrFail($id);
        return view('admin.chapters.edit', ['chapter' => $chapter]);
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
            'Name' => 'required'
        ]);
        $Chapter = Chapter::findorfail($id);
        $Chapter->name         = $request->Name;
        $Chapter->save();
        return redirect('/topic')->with('success', 'Topic Updated');
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
            $Chapter = Chapter::findorfail($id);
            $Chapter->delete($id);
            return redirect('/topic')->with('success', 'Topic Deleted');
        } catch (Throwable $e) {
            $validator = Validator::make([], []);

            return  redirect('/topic')->with('errors', $validator->errors()
                ->add('errors', "Can't delete a parent, it has related data"));
        }
    }
}
