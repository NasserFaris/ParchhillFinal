<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



use App\Models\Worksheet;
use App\school_years;
use App\Subject;
use Carbon\Carbon;

class WorksheetController extends Controller
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

        $chapters  = Chapter::all();
        $worksheets = Worksheet::all();
        return view('admin.worksheets.worksheets', ['chapters'=>$chapters, 'worksheets'=> $worksheets]);

        // return Storage::download('uploads/worksheets/Year 3/English/Alphabits-2/asdasd.pdf');
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
        $chapter = Chapter::all();
        return view(
            'admin.worksheets.create',
            [
                'year' => $year, 'subject' => $subjects,
                'chapter' => $chapter
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
        //
        $request->validate([
            'year' => 'required',
            'subject' => 'required',
            'chapter' => 'required',
            'topic' => 'required',
            'uploadFile' => 'required'
            // 'uploadFile' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);
        $year = school_years::find($request->year);
        $subject  = Subject::find($request->subject);
        $chapter = Chapter::find($request->chapter);


     //   $file_name = $request->file('uploadFile')->getClientOriginalName();        

// getClientOriginalExtension
        // $file_extention  = $request->file('uploadFile')->extension() ;

        $file_name = pathinfo($request->file('uploadFile')->getClientOriginalName(), PATHINFO_FILENAME); // like file
        $extension = pathinfo($request->file('uploadFile')->getClientOriginalName(), PATHINFO_EXTENSION); // like jpg

        $filePath = Storage::putFileAs(
            'uploads/worksheets',
            $request->file('uploadFile'),
            $year->name . '/' .  $subject->name . '/' . $chapter->name . '/' . $file_name.rand().'.'.$extension
        );

        $worksheet = new Worksheet;
        $worksheet->year_id =  $request->year;
        $worksheet->subject_id =  $request->subject;
        $worksheet->chapter_id =  $request->chapter;
        $worksheet->topic =  $request->topic;
        $worksheet->file_path =   $filePath;
        $worksheet->save();
        return redirect('/worksheet')->with('success', 'Worksheet added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $worksheet = Worksheet::find($id);
        return Storage::download($worksheet->file_path);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $worksheet = Worksheet::find($id);
        $year = school_years::all();
        $subjects = Subject::all();
        $chapter = Chapter::all();
        return view(
            'admin.worksheets.edit',
            [
                'worksheet' => $worksheet,
                'year' => $year,
                'subject' => $subjects,
                'chapter' => $chapter
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
        $request->validate([
            'year' => 'required',
            'subject' => 'required',
            'chapter' => 'required',
            'topic' => 'required',
            'uploadFile' => 'required'
            // 'uploadFile' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);
        $year = school_years::find($request->year);
        $subject  = Subject::find($request->subject);
        $chapter = Chapter::find($request->chapter);


        // $file_name = $request->file('uploadFile')->getClientOriginalName();

        $file_name = pathinfo($request->file('uploadFile')->getClientOriginalName(), PATHINFO_FILENAME); // like file
        $extension = pathinfo($request->file('uploadFile')->getClientOriginalName(), PATHINFO_EXTENSION); // like jpg
        
        $filePath = Storage::putFileAs(
            'uploads/worksheets',
            $request->file('uploadFile'),
            $year->name . '/' .  $subject->name . '/' . $chapter->name . '/' . $file_name.rand().'.'.$extension
        );

        $worksheet = Worksheet::find($id); ;
        Storage::delete($worksheet->file_path);
        $worksheet->year_id =  $request->year;
        $worksheet->subject_id =  $request->subject;
        $worksheet->chapter_id =  $request->chapter;
        $worksheet->topic =  $request->topic;
        $worksheet->file_path =   $filePath;
        $worksheet->save();
        return redirect('/worksheet')->with('success', 'Worksheet updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $worksheet = Worksheet::find($id);
        Storage::delete($worksheet->file_path);
        $worksheet->delete();
        return redirect('/worksheet')->with('success', 'Worksheet deleted');

    }
}
