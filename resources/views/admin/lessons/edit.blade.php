
@extends('admin.dashboard')
@section('content')
<div class="content-header">
  </div>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title text-dark">Lesson</h3>
                    <span class="float-sm-right"><a href="{{ url('/') }}/lesson" class="btn btn-success btn-sm" >Back</a></span>
                  </div> 
                <div class="card-body">            
                  {!! Form::open(['action' => ['LessonController@update', $lesson->id], 'method'=>'POST', 'files' => true]) !!}
                  {!! Form::open(['action' => ['LessonController@update', $lesson->id], 'method'=>'POST']) !!}
                  {{ Form::bsSelect('year',$year->pluck('name', 'id'), $lesson->year_id, ['placeholder'=>'Select year','class'=>' form-control  ']) }}  
                  {{ Form::bsSelect('subject',$subject->pluck('name', 'id'), $lesson->subject_id, ['placeholder'=>'Select Subject','class'=>' form-control']) }}
                  {{ Form::bsSelect('lessonConstan',$lessonConstan->pluck('name', 'id'),$lesson->lesson_id, ['placeholder'=>'Select lesson','class'=>' form-control']) }}
                  {{ Form::bsText('topic',$lesson->topic,['placeholder'=>'Enter topic','autocomplete'=>'off']) }}
                  
                  <div class="form-group row">
                    {{ Form::label('fact of the week', null, ['class' => 'col-sm-3 align-self-center col-form-label']) }}
                    <div class="col-sm-9">
                        {{ Form::text('fact_week', $lesson->fact_week, array_merge(['class' => 'form-control'], ['placeholder'=>'FACT OF THE WEEK','autocomplete'=>'off'])) }}
                    </div>
                  </div>
                  <div class="form-group row">
                    {{ Form::label('quet of the week', null, ['class' => 'col-sm-3 align-self-center col-form-label']) }}
                    <div class="col-sm-9">
                        {{ Form::text('quote_week', $lesson->quote_week, array_merge(['class' => 'form-control'], ['placeholder'=>'QUOTE OF THE WEEK','autocomplete'=>'off'])) }}
                    </div>
                  </div>
                  {{ Form::bsText('url',$lesson->url,['placeholder'=>'Enter youtube URL','autocomplete'=>'off']) }} 
                  <div class="form-group row">
                    {{ Form::label('Learning Booklet', null, ['class' => 'col-sm-3 align-self-center col-form-label']) }}
                    <div class="col-sm-9">
                      {{  Form::file('lbooklet')}}
                    </div>
                  </div>
                  <div class="form-group row">
                    {{ Form::label('Answer  Booklet', null, ['class' => 'col-sm-3 align-self-center col-form-label']) }}
                    <div class="col-sm-9">
                      {{  Form::file('abooklet')}}
                    </div>
                  </div>
                  <hr>
                  <div class="form-group row">
                    <table class="col-md-8">
                      <thead>
                        <th>Objective</th>
                        <th style="text-align:center" ><a class="btn btn-info addRow">+</a></th>
                      </thead>
                      
                      <tbody>
                        @foreach ($lessonObjective as $item)
                        <tr>                        
                          <td>{{ Form::text('objective[]', $item->name, array_merge(['class' => 'form-control removeTd'], ['placeholder'=>'Objective','autocomplete'=>'off'])) }}</td>
                          <td style="text-align:center" ><a class="btn btn-danger removeRow" LObkject_id = "{{$item->id}}">-</a></td>
                        </tr>  
                        @endforeach
                        
                      </tbody>
                    </table>
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
@section('page_script')
  <!-- Select2 -->
<script src="{{url('/')}}/bower_components/admin-lte/plugins/select2/js/select2.full.min.js"></script>
<script>
  $(function () {

  $('.select2').select2({
      placeholder: "Select ... "
  });
 
  $( ".addRow" ).on( "click", function() {
    addRow();
  });
  
  var tr = ' <tr> <td >{{ Form::text("objective[] ", "", array_merge(["class"=> "form-control "], ["placeholder"=>"Objective"])) }}</td><td style="text-align:center" ><a class="btn btn-danger removeRow" >-</a></td>';
  function addRow(){
    $('tbody').append(tr);
  };
  
  $('tbody').on('click', '.removeRow',function(){
    $(this).closest('tr').remove();
  });

}); 
</script>  
@endsection