<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Parent_acount;
use App\Models\Parent_subscription;
use App\Models\Parents;
use Illuminate\Http\Request;
use Auth;

class Account extends Controller
{
    
    public function __construct()
    {
        $this->middleware('revalidate');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $request = Request();
        // $parent_id = $request->session()->get('parent_id');
        $parent_id = Auth::guard('parent')->user()->id;
        $parent = Parents::find($parent_id);
        if (empty($parent)) {
            return redirect('/parent/login');
        }
        // $request->session()->put('parent_id', $id);

        $account = Parent_acount::where('parent_id', $parent_id)->get();
        $account_number = 0;
        if ($account->count() > 0) {
            $account_number = $account[0]->id;
        } else {
            $max_account_id = Parent_acount::max('id');
        }
        $account_number = (($account_number > 0) ? $account_number : $max_account_id + 1);
        return view('parent_account.account')->with(['account_number' => $account_number, 'account' => $account]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parent_id = $request->session()->get('parent_id');

        $account = Parent_acount::where('parent_id', $parent_id)->get();
        dd($account);
        // dd($account->count());
        if ($account->count() == 0) {
            $account  = new Parent_acount;
        } else {
            $account->id = $account[0]->id;
            $account  = Parent_acount::find($account->id);
        }


        $account->parent_id = $parent_id;
        $account->account_number = $request->input('Account_number');
        $account->name_of_account_holder = $request->input('Name_of_account_holder');
        $account->package = $request->input('Package');
        $account->payment_method = $request->input('Current_payment_method');
        $account->bank_name = $request->input('Name_of_Bank');
        $account->bank_account_name = $request->input('Account_holder_name');
        $account->bank_account_number = $request->input('Bank_account_number');
        $account->sort_code = $request->input('Sort_code');
        $account->save();
        return redirect('/parent/account')->with('success', 'Account details updated');
        /*
        $new_sub = new Parent_subscription;
        $new_sub->account_id = $account->id;
        $new_sub->parent_id = $parent_id;
        $new_sub->save();

        */
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
        //
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
        //
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
