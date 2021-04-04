<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ph_Tv; 

class Ph_TvController extends Controller
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
        
        $ph_tv = Ph_Tv::all();
        return view('admin.ph_tv.tvs', ['ph_tv'=>$ph_tv]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ph_tv.create');
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
            'url' => 'required',
            'description' =>'required'
        ]);
        $tv = new Ph_Tv(); 
        $tv->url = $request->url;
        $tv->description = $request->description;
         
        $tv->save(); 
        return redirect('/ph_tv')->with('success', 'PH TV video added');



    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ph_tv = Ph_Tv::find($id);
        return view('admin.ph_tv.edit')->with('ph_tv',$ph_tv);
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
            'url' => 'required',
            'description' =>'required'
        ]);
        $tv = Ph_Tv::find($id);
        $tv->url = $request->url;
        $tv->description = $request->description;
         
        $tv->save(); 
        return redirect('/ph_tv')->with('success', 'PH TV video updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tv = Ph_Tv::find($id);
        $tv->delete();
        return redirect('/ph_tv')->with('success', 'Successfully deleted');
    }
}
