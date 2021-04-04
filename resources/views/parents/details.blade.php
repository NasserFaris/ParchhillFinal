@extends('layouts.parents.app')
@section('content')

{!! Form::open(['action' => ['ParentController@updateDetails',$id], 'method'=>'POST', 'id'=>'details_form']) !!}
    @include('admin.inc.messages')
    <div class="title">
        <h1>
            Parent’s Details  
        </h1>
    </div>
    <div class="form-group row">
        <label  class="col-sm-2 align-self-center col-form-label">First Name <span>*</span></label>
        <div class="col-sm-6">
            {{ Form::text('First Name', ($info->first_name), array_merge(['class' => 'form-control'], ['required'=>'required'])) }}
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 align-self-center col-form-label">Last Name <span>*</span></label>
        <div class="col-sm-6">
            {{ Form::text('Last Name', ($info->last_name), array_merge(['class' => 'form-control'], ['required'=>'required'])) }}
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2  align-self-center col-form-label ">Email Address <span>*</span></label>
        <div class="col-sm-6">
            {{ Form::text('Email Address', ($info->email), array_merge(['class' => 'form-control'], ['required'=>'required'])) }}
        </div>
    </div>
 


    <div class="form-group row">
        <label class="col-sm-2  align-self-center col-form-label ">Password<span>*</span></label>
        <div class="col-sm-6">
            <div class="collapse mb-3" id="changepass">
                <input type="password" class="form-control mt-3"  name="Password" value="{{$info->password}}"  placeholder="Password" required>
            </div>
            <a class="btn btn-lg text-yellow" data-toggle="collapse" href="#changepass" role="button" aria-expanded="true" aria-controls="changepass">
               Change 
            </a>
        </div>
    </div>    
    {{-- <div class="form-group row">
        <label class="col-sm-2  align-self-center col-form-label ">Password<span>*</span></label>
        <div class="col-sm-6">
            <div class="collapse mb-3" id="changepass">
                <input type="password" class="form-control"  value=""  placeholder="Current Password" >
                <input type="password" class="form-control mt-3"  value=""  placeholder="New Password" >
                <input type="password" class="form-control mt-3 "  value=""  placeholder="Confirm Password" >
            </div>
            <a class="btn btn-lg text-yellow" data-toggle="collapse" href="#changepass" role="button" aria-expanded="true" aria-controls="changepass">
               Change 
            </a>
        </div>
    </div> --}}
    <div class="form-group row">
        <label class="col-sm-2 align-self-center col-form-label ">Address <span>*</span></label>
        <div class="col-sm-6">
            {{ Form::text('Address', ($info->address), array_merge(['class' => 'form-control'], ['required'=>'required'])) }}
        </div>
    </div>
    <div class="form-group row">
        <label  class="col-sm-2 align-self-center col-form-label">Town/City <span>*</span></label>
        <div class="col-sm-6">
            {{ Form::text('Town/City', ($info->town_city), array_merge(['class' => 'form-control'], ['required'=>'required'])) }}
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 align-self-center col-form-label">County <span>*</span></label>
        <div class="col-sm-6">
            {{ Form::text('Counrty', ($info->county), array_merge(['class' => 'form-control'], ['required'=>'required'])) }}
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2  align-self-center col-form-label ">Post code <span>*</span></label>
        <div class="col-sm-6">
            {{ Form::text('Post code', ($info->post_code), array_merge(['class' => 'form-control'], ['required'=>'required'])) }}
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2  align-self-center col-form-label ">Telephone<span>*</span></label>
        <div class="col-sm-6">
            {{ Form::text('Telephone', ($info->telephone), array_merge(['class' => 'form-control'], ['required'=>'required'])) }}
        </div>
    </div> 
    <div class="row">
        <div class="offset-md-2 col-md-6">
            <div class="link">
                <button class="btn btn-lg bg-yellow" type="submit">save</button>
           </div>
        </div>
    </div>
    {{ Form::hidden('_method', 'PUT')}}
     {!! Form::close() !!}
        
@endsection
@section('app_script')
{{-- <script src="{{URL::asset('assets/js/pages/parent.details.js')}}"></script>  --}}
@endsection