<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stage;
class StagesController extends Controller
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
        $stages = Stage::all();
        return view('admin.stages.stages')->with('stages', $stages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.stages.createstage');
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
        $stage = new Stage; 
        $stage->name = $request->input('name');
        $stage->user_id = auth()->user()->id;
        $stage->save(); 
        return redirect('/stages')->with('success', 'Stage Added');
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
        $stage = Stage::find($id);
        return view('admin.stages.editstage')->with('stage',$stage);
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
        $stage = Stage::find($id); 
        $stage->name = $request->input('name');
        $stage->user_id = auth()->user()->id;
        $stage->save(); 
        return redirect('/stages')->with('success', 'Stage Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stage = Stage::find($id);
        $stage->delete();
        return redirect('/stages')->with('success', 'Stage Deleted'); 
    }
}
