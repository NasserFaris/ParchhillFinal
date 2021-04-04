
@extends('admin.dashboard')
@section('content')
<div class="content-header">
    <div class="container-fluid">
       <!-- Select2 -->
    </div><!-- /.container-fluid -->
  </div>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-7 col-md-offset-2">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title text-dark">worksheets</h3>
                <span class="float-sm-right"><a href="{{ url('/') }}/worksheet" class="btn btn-success btn-sm" >Back</a></span>
              </div> 
                <div class="card-body p0">              
                  {!! Form::open(['action' => 'WorksheetController@store', 'method'=>'POST', 'files' => true]) !!}
                    {{ Form::bsSelect('year',$year->pluck('name', 'id'),null, ['placeholder'=>'Select year','class'=>' form-control  ']) }}  
                    {{ Form::bsSelect('subject',$subject->pluck('name', 'id'),null, ['placeholder'=>'Select Subject','class'=>' form-control']) }}
                    
{{-- Topic is the title but chapter is the name of input --}}
                    <div class="form-group row">
                      {{ Form::label('Topic', null, ['class' => 'col-sm-3 align-self-center col-form-label']) }}
                      <div class="col-sm-9 ">
                          {{ Form::select('chapter', $chapter->pluck('name', 'id'),null, array_merge(['class' => 'form-control'], ['placeholder'=>'Select Topic'])) }}
                      </div>
                    </div>
{{-- Description is the title but topic is the name of input --}}                    
                    <div class="form-group row">
                      {{ Form::label('description', null, ['class' => 'col-sm-3 align-self-center col-form-label']) }}
                      <div class="col-sm-9">
                          {{ Form::textArea('topic', '', array_merge(['class' => 'form-control'], ['placeholder'=>'Enter description','autocomplete'=>'off'])) }}
                      </div>
                    </div>
                  
                    <div class="form-group row">
                      {{ Form::label('file', null, ['class' => 'col-sm-3 align-self-center col-form-label']) }}
                      <div class="col-sm-9">
                        {{  Form::file('uploadFile')}}
                      </div>
                    </div>
                    
                    {{ Form::bsSubmit('Submit', ['class'=>'btn btn-primary']) }}
                  {!! Form::close() !!}
                </div>
            </div>
        </div>
          </div> 
    </div>
  </div>
<!-- Select2 -->
<script src="{{url('/')}}/bower_components/admin-lte/plugins/select2/js/select2.full.min.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2({
        placeholder: "Select ... "
      });
  });
</script>
<!-- /.content-header -->    
@endsection