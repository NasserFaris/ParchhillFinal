
@extends('admin.dashboard')
@section('content')
<div class="content-header">
    <div class="container-fluid">

  </div>
</div>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 col-md-offset-2">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title text-dark">School Year</h3>
                <span class="float-sm-right"><a href="{{ url('/') }}/schoolyear" class="btn btn-success btn-sm" >Back</a></span>
              </div> 
                <div class="card-body">              
                  {!! Form::open(['action' => ['SchoolYearController@update', $year->id], 'method'=>'POST']) !!}
                    {{ Form::bsText('name',$year->name,['placeholder'=>'Stage Name', 'autocomplete'=>'off']) }}
                    {{ Form::bsTextArea('description',$year->description,['placeholder'=>'Enter School year description','autocomplete'=>'off']) }}
                    {{ Form::bsSubmit('Submit', ['class'=>'btn btn-primary']) }}
                    {{ Form::hidden('_method', 'PUT')}}
                  {!! Form::close() !!}
                </div>
            </div>
        </div>
          </div> 
    </div>
  </div>

<!-- /.content-header -->    
@endsection