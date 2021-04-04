
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
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title text-dark">Exam Paper</h3>
                <span class="float-sm-right"><a href="{{ url('/') }}/examPaper" class="btn btn-success btn-sm" >Back</a></span>
              </div> 
                <div class="card-body p0">              
                  {!! Form::open(['action' => 'ExamPaperController@store', 'method'=>'POST', 'files' => true]) !!}
                    {{ Form::bsText('Title','',['placeholder'=>'Enter exam paper title','autocomplete'=>'off']) }}
                    {{ Form::bsSelect('AgePeriod',$AgePeriod->pluck('name', 'id'),null, ['placeholder'=>'Select Age Period','class'=>' form-control  ']) }}                      
                    {{-- {{ Form::bsSelect('subject',$subject->pluck('name', 'id'),null, ['placeholder'=>'Select Subject','class'=>' form-control']) }}             --}}
                    <div class="form-group row uploadFile">
                      {{ Form::label('Math file', null, ['class' => 'col-sm-3 align-self-center col-form-label']) }}
                      <div class="col-sm-9">
                        {{  Form::file('uploadMathFile')}}
                      </div>
                    </div>
                    <div class="form-group row uploadFile">
                      {{ Form::label('English file', null, ['class' => 'col-sm-3 align-self-center col-form-label']) }}
                      <div class="col-sm-9">
                        {{  Form::file('uploadEnglishFile')}}
                      </div>
                    </div>

                    {{-- /*

                    */ --}}
                    
                    <div class="form-group row gcse" >
                      {{ Form::label('Math OCR', null, ['class' => 'col-sm-3 align-self-center col-form-label']) }}
                      <div class="col-sm-9">
                        {{  Form::file('math_OCR')}}
                      </div>
                    </div>
                    <div class="form-group row gcse">
                      {{ Form::label('Math AQA', null, ['class' => 'col-sm-3 align-self-center col-form-label']) }}
                      <div class="col-sm-9">
                        {{  Form::file('math_AQA')}}
                      </div>
                    </div>
                    <div class="form-group row gcse">
                      {{ Form::label('Math EDEXCEL', null, ['class' => 'col-sm-3 align-self-center col-form-label']) }}
                      <div class="col-sm-9">
                        {{  Form::file('math_EDEXCEL')}}
                      </div>
                    </div>



                    <div class="form-group row gcse" >
                      {{ Form::label('English OCR', null, ['class' => 'col-sm-3 align-self-center col-form-label']) }}
                      <div class="col-sm-9">
                        {{  Form::file('English_OCR')}}
                      </div>
                    </div>
                    <div class="form-group row gcse">
                      {{ Form::label('English AQA', null, ['class' => 'col-sm-3 align-self-center col-form-label']) }}
                      <div class="col-sm-9">
                        {{  Form::file('English_AQA')}}
                      </div>
                    </div>
                    <div class="form-group row gcse">
                      {{ Form::label('English EDEXCEL', null, ['class' => 'col-sm-3 align-self-center col-form-label']) }}
                      <div class="col-sm-9">
                        {{  Form::file('English_EDEXCEL')}}
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

<!-- /.content-header -->    
@endsection

@section('page_script')
<script src="{{url('/')}}/bower_components/admin-lte/plugins/select2/js/select2.full.min.js"></script>
<script>
  $(function () {
     //Initialize Select2 Elements
     $('.gcse').hide();
 
    $( "#AgePeriod" ).change(function() {
      var agePariod =  $( "#AgePeriod" ).val();
      if(agePariod == 9) {   
            $('.gcse').show();
            $('.uploadFile').hide();
        } else {
            $('.gcse').hide();
            $('.uploadFile').show();
        } 
    });
  });



</script>
@endsection