@extends('layouts.exam.app')
@section('content')
<section class="sec-register">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>
                    A real assessment!
                </h1>
                <h3>Assess which level your child is at and their exam readiness. Help allow your parents to identify where
                    you are with a <strong>FREE Camprehensive Parent Feedback Report </strong> after the assessment. 
                </h3>
            </div>
           
            <div class="col-md-12">         
                {!! Form::open(['action' => 'ParentController@store', 'method'=>'POST', 'id'=>'contact_form']) !!}
            
                    {{ Form::bsText('Parent Name',old('Parent_Name'),['placeholder'=>'','autocomplete'=>'off' , 'required'=>'required' ]) }}
                    {{ Form::bsText('Phone Number',old('Phone_Number'),['placeholder'=>'','autocomplete'=>'off' , 'required'=>'required'  ]) }}
                    {{-- {{ Form::bsText('Email','',['placeholder'=>'','autocomplete'=>'off', 'required'=>'required']) }}      --}}
                    
                    <div class="form-group row">
                        {{ Form::label('Email Address', null, ['class' => 'col-sm-3 align-self-center col-form-label']) }}
                        <div class="col-sm-9">
                            {{ Form::text('Email', old('Email'), array_merge(['class' => 'form-control'], ['placeholder'=>'','autocomplete'=>'off', 'required'=>'required'])) }}
                            <span class="error">
                                {{$errors->first('Email')}}
                            </span>  
                        </div>
                    </div>
                     
                   
                    {{ Form::bsText('Child’s Name',old('Child’s_Name'),['placeholder'=>'','autocomplete'=>'off' , 'required'=>'required']) }}               
                    {{ Form::bsSelect('Year',$year->pluck('name', 'id'),old('Year'), ['placeholder'=>'', 'required'=>'required']) }}                  
                    {{-- {{ Form::bsSubmit('Start', ['class'=>'btn btn-lg bg-yellow']) }}    --}}
                    <div class="link">
                        <button class="btn btn-lg bg-yellow" type="submit">Start</button>
                    </div>                                 
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
@endsection
@section('app_script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
       <script src="{{URL::asset('assets/js/pages/parent.register.js')}}"></script> 
@endsection


       