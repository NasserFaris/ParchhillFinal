<?php

namespace App\Http\Controllers;

use App\Models\Ph_Tv;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.main');
    }
    public function resources()
    {
        return view('site.resources');
    }
    public function findCenter()
    {
        return view('site.find-center');
    }
    public function onlineLearning()
    {
        return view('site.online-learning');
    }
    public function freeTuition()
    {
        return view('site.free-tuition');
    }
    public function whyChooseUs()
    {
        return view('site.why-choose-us');
    }
    public function faq()
    {
        return view('site.faq');
    }
    public function blog()
    {
        return view('site.blog');
    }
    public function careers()
    {
        return view('site.careers');
    }
    public function policies()
    {
        return view('site.policies');
    }
    public function phTv()
    {
        $ph_tv = Ph_Tv::all();
      
        return view('site.ph-tv', ['ph_tv'=>$ph_tv]);
    }
}
