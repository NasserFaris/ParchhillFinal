
@extends('admin.dashboard')
@section('content')
<div class="content-header">
    <div class="container-fluid">
       <!-- Select2 -->
  <link rel="stylesheet" href="{{url('/')}}/bower_components/admin-lte/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="{{url('/')}}/bower_components/admin-lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    </div><!-- /.container-fluid -->
  </div>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 col-md-offset-2">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title text-dark"> Topics</h3>
                <span class="float-sm-right"><a href="{{ url('/') }}/topic" class="btn btn-success btn-sm" >Back</a></span>
              </div> 
                <div class="card-body p0">              
                  {!! Form::open(['action' => 'ChaptersController@store', 'method'=>'POST']) !!}
                    {{ Form::bsText('Name','',['placeholder'=>'Name','autocomplete'=>'off']) }}    
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