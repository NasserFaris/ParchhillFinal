
@extends('admin.dashboard')
@section('content')
<div class="content-header">
    <div class="container-fluid">
      
    </div><!-- /.container-fluid -->
  </div>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">PH TV's</h3>
                <span class="float-sm-right"><a href="{{ url('/') }}/ph_tv" class="btn btn-success btn-sm" >Back</a></span>
              </div> 
                <div class="card-body p0">              
                  {!! Form::open(['action' => 'Ph_TvController@store', 'method'=>'POST']) !!}
                    {{ Form::bsText('url','',['placeholder'=>'Enter youtube URL','autocomplete'=>'off']) }}
                    {{ Form::bsTextArea('description','',['placeholder'=>'Enter description','autocomplete'=>'off']) }}
                    {{ Form::bsSubmit('Submit', ['class'=>'btn btn-primary']) }}
                  {!! Form::close() !!}
                </div>
            </div>
        </div>
          </div> 
    </div>
  </div>

<!-- /.content-header -->    
@endsection