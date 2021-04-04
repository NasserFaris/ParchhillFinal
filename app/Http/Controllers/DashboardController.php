<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subscription;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_name = auth()->user()->name;
        return view('admin/dashboard')->with('user_name',$user_name);
    }

    public function parents()
    {
        $Subscription = Subscription::all();
        return view('admin/admin_parents/parents',['Subscription'=>$Subscription]);
    }
}
