<?php

namespace App\Http\Controllers;

use App\Models\AgePeriod;
use App\Models\examPaper;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class ExamPaperController extends Controller
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
        $papers = examPaper::all();
        return view('admin.examPaper.index')->with('papers', $papers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $AgePeriod = AgePeriod::all();
        return view('admin.examPaper.create', [
            'AgePeriod' => $AgePeriod
        ]);
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
            'Title' => 'required',
            'AgePeriod' => 'required'
            // 'uploadFile' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);
        $AgePeriod = AgePeriod::find($request->AgePeriod);
        $mathPath = NULL;
        $englishPath = NULL;
        $OCRPath = null;
        $AQAPath = null;
        $EDEXCELPath = null;
        $eOCRPath = null;
        $eAQAPath = null;
        $eEDEXCELPath = null;
        if ($request->AgePeriod != 9) {
            $mathPath = Storage::putFileAs(
                'uploads/exampaper',
                $request->file('uploadMathFile'),
                $AgePeriod->name . '/' .  'Math' . ' - ' . $request->Title . '.' . $request->file('uploadMathFile')->extension()
            );
            $englishPath = Storage::putFileAs(
                'uploads/exampaper',
                $request->file('uploadEnglishFile'),
                $AgePeriod->name . '/' .  'English' . ' - ' . $request->Title . '.' . $request->file('uploadEnglishFile')->extension()
            );
        } else {

            $OCRPath = Storage::putFileAs(
                'uploads/exampaper',
                $request->file('math_OCR'),
                $AgePeriod->name . '/' . 'Math' . ' - ' . $request->Title . '/Math_OCR.' . $request->file('math_OCR')->extension()
            );
            $AQAPath = Storage::putFileAs(
                'uploads/exampaper',
                $request->file('math_AQA'),
                $AgePeriod->name . '/' .  'Math' . ' - ' . $request->Title . '/Math_AQA.' . $request->file('math_AQA')->extension()
            );
            $EDEXCELPath = Storage::putFileAs(
                'uploads/exampaper',
                $request->file('math_EDEXCEL'),
                $AgePeriod->name . '/' .  'Math' .  ' - ' . $request->Title . '/Math_EDEXCEL.' . $request->file('math_EDEXCEL')->extension()
            );

            /// English

            $eOCRPath = Storage::putFileAs(
                'uploads/exampaper',
                $request->file('English_OCR'),
                $AgePeriod->name . '/' .  'English' . ' - ' . $request->Title . '/English_OCR.' . $request->file('English_OCR')->extension()
            );
            $eAQAPath = Storage::putFileAs(
                'uploads/exampaper',
                $request->file('English_AQA'),
                $AgePeriod->name . '/' .  'English' . ' - ' . $request->Title . '/English_AQA.' . $request->file('English_AQA')->extension()
            );
            $eEDEXCELPath = Storage::putFileAs(
                'uploads/exampaper',
                $request->file('English_EDEXCEL'),
                $AgePeriod->name . '/' .  'English' .  ' - ' . $request->Title . '/English_EDEXCEL.' . $request->file('English_EDEXCEL')->extension()
            );
        }
        $paper = new examPaper();
        $paper->agePeriod_id =  $request->AgePeriod;
        $paper->title =  $request->Title;
        $paper->math_path =  $mathPath;
        $paper->english_path =  $englishPath;

        $paper->math_ocr =  $OCRPath;
        $paper->math_aqa =   $AQAPath;
        $paper->math_edexcel =   $EDEXCELPath;
        $paper->english_ocr =  $eOCRPath;
        $paper->english_aqa =   $eAQAPath;
        $paper->english_edexcel =   $eEDEXCELPath;
        $paper->save();
        return redirect('/examPaper')->with('success', 'Exam paper added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $type)
    {
        $paper = examPaper::find($id);
        return Storage::download($paper->$type);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paper = examPaper::findorfail($id);
        $AgePeriod = AgePeriod::all();
        return view('admin.examPaper.edit', [
            'AgePeriod' => $AgePeriod,
            'paper' => $paper
        ]);
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
            'Title' => 'required',
            'AgePeriod' => 'required'
            // 'uploadFile' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);
        $AgePeriod = AgePeriod::find($request->AgePeriod);
        $mathPath = NULL;
        $englishPath = NULL;
        $OCRPath = null;
        $AQAPath = null;
        $EDEXCELPath = null;
        $eOCRPath = null;
        $eAQAPath = null;
        $eEDEXCELPath = null;
        if ($request->AgePeriod != 9) {
            $mathPath = Storage::putFileAs(
                'uploads/exampaper',
                $request->file('uploadMathFile'),
                $AgePeriod->name . '/' .  'Math' . ' - ' . $request->Title . '.' . $request->file('uploadMathFile')->extension()
            );
            $englishPath = Storage::putFileAs(
                'uploads/exampaper',
                $request->file('uploadEnglishFile'),
                $AgePeriod->name . '/' .  'English' . ' - ' . $request->Title . '.' . $request->file('uploadEnglishFile')->extension()
            );
        } else {

            $OCRPath = Storage::putFileAs(
                'uploads/exampaper',
                $request->file('math_OCR'),
                $AgePeriod->name . '/' . 'Math' . ' - ' . $request->Title . '/Math_OCR.' . $request->file('math_OCR')->extension()
            );
            $AQAPath = Storage::putFileAs(
                'uploads/exampaper',
                $request->file('math_AQA'),
                $AgePeriod->name . '/' .  'Math' . ' - ' . $request->Title . '/Math_AQA.' . $request->file('math_AQA')->extension()
            );
            $EDEXCELPath = Storage::putFileAs(
                'uploads/exampaper',
                $request->file('math_EDEXCEL'),
                $AgePeriod->name . '/' .  'Math' .  ' - ' . $request->Title . '/Math_EDEXCEL.' . $request->file('math_EDEXCEL')->extension()
            );

            /// English

            $eOCRPath = Storage::putFileAs(
                'uploads/exampaper',
                $request->file('English_OCR'),
                $AgePeriod->name . '/' .  'English' . ' - ' . $request->Title . '/English_OCR.' . $request->file('English_OCR')->extension()
            );
            $eAQAPath = Storage::putFileAs(
                'uploads/exampaper',
                $request->file('English_AQA'),
                $AgePeriod->name . '/' .  'English' . ' - ' . $request->Title . '/English_AQA.' . $request->file('English_AQA')->extension()
            );
            $eEDEXCELPath = Storage::putFileAs(
                'uploads/exampaper',
                $request->file('English_EDEXCEL'),
                $AgePeriod->name . '/' .  'English' .  ' - ' . $request->Title . '/English_EDEXCEL.' . $request->file('English_EDEXCEL')->extension()
            );
        }
        $paper = examPaper::find($id);
        $paper->agePeriod_id =  $request->AgePeriod;
        $paper->title =  $request->Title;
        $paper->math_path =  $mathPath;
        $paper->english_path =  $englishPath;

        $paper->math_ocr =  $OCRPath;
        $paper->math_aqa =   $AQAPath;
        $paper->math_edexcel =   $EDEXCELPath;
        $paper->english_ocr =  $eOCRPath;
        $paper->english_aqa =   $eAQAPath;
        $paper->english_edexcel =   $eEDEXCELPath;
        $paper->save();

        return redirect('/examPaper')->with('success', 'Exam paper updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paper = examPaper::find($id);
        if ($paper->agePeriod_id == 9) {
            Storage::delete([
                $paper->math_ocr, $paper->math_aqa, $paper->math_edexcel,
                $paper->english_ocr, $paper->english_aqa, $paper->english_edexcel
            ]);
        } else {
            Storage::delete([$paper->math_path, $paper->english_path]);
        }
        $paper->delete();
        return redirect('/examPaper')->with('success', 'Exam paper deleted');
    }
}
