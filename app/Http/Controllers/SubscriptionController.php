<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Parents;
use App\Models\Student;
use App\Models\Subscription;
use App\school_years;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
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

        $parent_id = session('parent_id');
        $subscription = new Subscription();
        $subscription = $subscription->studentSubscribtionByParentId($parent_id);
        $package = Package::all();
        $years = school_years::all();
        return view('parents.subscriptions.subscription',
         ['packages' => $package, 'Subscription' => $subscription, 'years'=>$years]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $package = Package::all();
        $Subscription = Subscription::where('parent_id', session('parent_id'))->get();
        return view('parents.subscriptions.subscription', ['package' => $package, 'Subscription' => $Subscription]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo session('parent_id');
        // dd($request);
        $sub = new Subscription;
        $sub->parent_id = session('parent_id');
        $sub->package_id = $request->changegrade;
        $sub->status = $request->status;
        $sub->total_per_year = $request->total_per_year;
        $sub->renewal_date = $request->renewl_date;
        $sub->save();
        return redirect('/parent/subscription')->with('success', 'Subscription added');
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
        $sub =  Subscription::find($id);
        $package = Package::all();
        return view('parents.subscriptions.edit', ['package' => $package, 'subscription' => $sub]);
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
        $sub =  Subscription::find($id);
        $sub->parent_id = session('parent_id');
        $sub->package_id = $request->input('changegrade');
        $sub->status = $request->input('status');
        $sub->total_per_year = $request->input('total_per_year');
        $sub->renewal_date = $request->input('renewl_date');
        $sub->save();
        return redirect('/parent/subscription')->with('success', 'Subscription updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

class PostRequest extends Request
{
    public function rules()
    {
        return [
            'status' => 'required',
            'total_per_year' => 'required',
            'renewl_date' => 'required|date',
            'changegrade' => 'required|date',
        ];
    }
}
