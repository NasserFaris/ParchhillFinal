@extends('layouts.parents.app')
@section('content')
    {!! Form::open(['action' => 'Account@store', 'method'=>'POST']) !!}
        @include('admin.inc.messages')
        <div class="title">
            <h1>
                Account Details  
            </h1>
        </div>

        <div class="form-group row">
            <label  class="col-sm-3 align-self-center col-form-label">Account number </label>
            <div class="col-sm-6">
                {{ Form::text('Account number', $account_number, array_merge(['class' => 'form-control'], ['required'=>'required'])) }}
            </div>
        </div>
        <div class="form-group row">
            <label  class="col-sm-3 align-self-center col-form-label">Name of account holder </label>
            <div class="col-sm-6">
                {{ Form::text('Name of account holder', (!empty($account[0])) ? $account[0]->name_of_account_holder: '',array_merge(['class' => 'form-control'], ['required'=>'required'])) }}
            </div>
        </div>
        <div class="title">
            <h1>
                Subscription Details
            </h1>
        </div>
        <div class="form-group row">
            <label  class="col-sm-3 align-self-center col-form-label">Package </label>
            <div class="col-sm-6">
                {{ Form::text('Package', (!empty($account[0])) ? $account[0]->package: 'Free',array_merge(['class' => 'form-control'], ['required'=>'required'])) }}
            </div>
        </div>
            <div class="form-group row">
                {{ Form::label('Upgrade/Downgrade', null, ['class' => 'col-sm-3 align-self-center col-form-label']) }}
                <div class="col-sm-9">
                 </div>
            </div>
          
            

            <div class="title">
                <h1>
                    Bank Details
                </h1>
            </div>
            <div class="form-group row">
                <label  class="col-sm-3 align-self-center col-form-label">Current payment method </label>
                <div class="col-sm-6">
                    {{ Form::text('Current payment method', (!empty($account[0])) ? $account[0]->payment_method: '',array_merge(['class' => 'form-control'], ['required'=>'required'])) }}
                </div>
            </div>
            <div class="form-group row">
                <label  class="col-sm-3 align-self-center col-form-label">Name of Bank</label>
                <div class="col-sm-6">
                    {{ Form::text('Name of Bank', (!empty($account[0])) ? $account[0]->bank_name: '',array_merge(['class' => 'form-control'], ['required'=>'required'])) }}
                </div>
            </div>
            <div class="form-group row">
                <label  class="col-sm-3 align-self-center col-form-label">Account holder name</label>
                <div class="col-sm-6">
                    {{ Form::text('Account holder name', (!empty($account[0])) ? $account[0]->bank_account_name: '',array_merge(['class' => 'form-control'], ['required'=>'required'])) }}
                </div>
            </div>
            <div class="form-group row"> 
                <label  class="col-sm-3 align-self-center col-form-label">Bank account number</label>
                <div class="col-sm-6">
                    {{ Form::text('Bank account number', (!empty($account[0])) ? $account[0]->bank_account_name: '',array_merge(['class' => 'form-control'], ['required'=>'required'])) }}
                </div>
            </div>
            <div class="form-group row"> 
                <label  class="col-sm-3 align-self-center col-form-label">Sort code</label>
                <div class="col-sm-6">
                    {{ Form::text('Sort code', (!empty($account[0])) ? $account[0]->sort_code: '',array_merge(['class' => 'form-control'], ['required'=>'required'])) }}
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <div class="link">
                        <button class="btn btn-lg bg-yellow" type="submit">save</button>
                   </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('app_script')
<script src="{{URL::asset('assets/js/pages/parent.details.js')}}"></script> 
@endsection