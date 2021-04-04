
@extends('admin.dashboard')
@section('content')
<div class="content-header">
   
  </div>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Question</h3>
                <span class="float-sm-right"><a href="{{ url('/') }}/questions/create" class="btn btn-success btn-sm" >Create </a></span>
              </div>           
                <div class="card-body ">                
                    @if(count($Questions))
                        <table class="table table-bordered table-striped dataTable no-footer " id="questionTable">
                            <thead>
                                <th> Subject</th>
                                <th> Year </th>
                                <th> Qustion</th>
                                <th> Answer 1</th>
                                <th> Answer 2</th>
                                <th> Answer 3</th>
                                <th> Right answer</th>

                                <th></th>
                                <th></th>
                            </thead>
                            <tbody>
                            @foreach ($Questions as $item)
                                <tr>
                                    <td>
                                      @foreach ($subjects as $subject)
                                          @if ($subject->id == $item->subject_id)
                                              {{$subject->name}}
                                          @endif
                                      @endforeach  
                                    
                                    </td>  
                                    <td>
                                      @foreach ($years as $year)
                                          @if ($year->id == $item->school_year_id)
                                              {{$year->name}}
                                          @endif
                                      @endforeach 
                                    </td>  
                                    <td>{{$item->question}}</td>  
                                    <td>{{$item->answer1}}</td>  
                                    <td>{{$item->answer2}}</td>
                                    <td>{{$item->answer3}}</td>
                                    <td>{{$item->rightanswer}}</td>
                                    <td><a class="btn btn-info  btn-sm" href="{{url('/')}}/questions/{{$item->id}}/edit">Edit</a>  </td>  
                                    <td>
                                        {!! Form::open(['action' => ['QuestionsController@destroy', $item->id], 'method'=>'POST',  'class'=> '', 'onsubmit'=> 'return confirm("Are you sure ?")']) !!}
                                        {{ Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('delete',['class'=>' btn btn-danger btn-sm'])}}
                                        {!! Form::close() !!}                                         
                                    </td>
                                </tr>     
                            @endforeach
                        </tbody>
                        </table>
                    @endif
                  
                </div>
            </div>
        </div>
          </div> 
    </div>
  </div>
<!-- /.content-header -->   
<script>
   $(function () {
        $("#questionTable").DataTable({
            "pageLength": 10
        });
    });
</script> 
@endsection