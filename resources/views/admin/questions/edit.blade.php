
@extends('admin.dashboard')
@section('content')
<div class="content-header">
    
  </div>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title text-dark">Questions</h3>
                    <span class="float-sm-right"><a href="{{ url('/') }}/questions" class="btn btn-success btn-sm" >Back</a></span>
                  </div> 
                <div class="card-body">              
            


                  {!! Form::open(['action' => ['QuestionsController@update', $questions->id], 'method'=>'POST']) !!}
                    {{ Form::bsSelect('Subject',$subject->pluck('name', 'id'), $questions->subject_id, ['placeholder'=>'Select Subject','class'=>' form-control  ']) }}
                    {{ Form::bsSelect('Year',$year->pluck('name', 'id'), $questions->school_year_id, ['placeholder'=>'Select Year','class'=>' form-control  ']) }}  
                    {{ Form::bsText('Question' ,$questions->question,['placeholder'=>'Question']) }}
                    {{ Form::bsText('Answer 1',$questions->answer1,['placeholder'=>'Ansewer 1']) }}
                    {{ Form::bsText('Answer 2',$questions->answer2,['placeholder'=>'Ansewer 2']) }}
                    {{ Form::bsText('Answer 3',$questions->answer3,['placeholder'=>'Ansewer 3']) }}
                    
                    <div class="form-group">
                      {{ Form::label('Right Answer', null, ['class' => 'control-label']) }}
                      {{ Form::radio('Right Answer','Answer 1', ($questions->rightanswer == $questions->answer1) ? true : '')}}Answer 1 
                      {{ Form::radio('Right Answer', 'Answer 2',($questions->rightanswer == $questions->answer2) ? true :'' )}}Answer 2
                      {{ Form::radio('Right Answer', 'Answer 3',($questions->rightanswer == $questions->answer3) ? true: '')}}Answer 3 
                    </div>
                    
                    {{ Form::hidden('_method', 'PUT')}}
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