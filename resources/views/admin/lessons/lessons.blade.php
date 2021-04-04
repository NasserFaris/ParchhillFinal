
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
                <h3 class="card-title">Lessons</h3>
                <span class="float-sm-right"><a href="{{ url('/') }}/lesson/create" class="btn btn-success btn-sm" >Create </a></span>
              </div>           
               
                <div class="card-body">                
                    @if(count($lesson))
                        <table class="table table-bordered table-striped dataTable no-footer" id="dataTabel">
                            <thead>
                                <th> Year</th>
                                <th> Subject</th>
                                <th> Lesson</th>
                                <th> Topic </th>
                                <th> FACT OF THE WEEK </th>
                                <th> QUOTE OF THE WEEK</th>
                                <th> Video </th>
                                <th> Learning Booklet</th>
                                <th> Answer Booklet</th>
                                <th> Objective</th>
                                <th> Edit</th>
                                <th> Delete</th>
                            </thead>
                            <tbody>
                            @foreach ($lesson as $item)
                                <tr> 
                                    <td>{{$item->years()[0]->name}}</td>
                                    <td>{{$item->subjects()[0]->name}}</td>
                                    <td>{{$item->lesson()[0]->name}}</td>
                                    <td>{{$item->topic}}</td>
                                    <td>{{$item->fact_week}}</td>
                                    <td>{{$item->quote_week}}</td>  
                                    {{-- href="{{url('/')}}/worksheet/{{$item->id}}/download" --}}
                                    
                                      <td>
                                        <iframe 
                                          width="200" height="150" 
                                          <?php 
                                            $url = str_replace('https://youtu.be/','https://www.youtube.com/embed/', $item->url );
                                          ?>
                                          src="{{$url}}" 
                                          frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                        </iframe>  
                                      </td>
                                      <td> 
                                        @if ($item->learning_path != '')
                                          <a href="{{url('/')}}/lesson/{{$item->id}}/ldownload">DOWNLOAD</a> 
                                        @else       
                                        -
                                        @endif
                                        
                                      </td>                                   
                                      <td> 
                                        @if ($item->answer_path != '')
                                        <a href="{{url('/')}}/lesson/{{$item->id}}/adownload">DOWNLOAD</a> 
                                        @else       
                                        -
                                        @endif
                                      <td>
                                        <ul>
                                            @foreach ($item->objective() as $objec)
                                            <li>{{$objec->name}}</li>                                          
                                            @endforeach  
                                        </ul>
                                      </td>  

                                    <td><a class="btn btn-info  btn-sm" href="{{url('/')}}/lesson/{{$item->id}}/edit">Edit</a>  </td>  
                                    <td>
                                      {{-- <a class="btn btn-danger  btn-sm" href="{{url('/')}}/lesson/{{$item->id}}/delete">delete</a>  --}}
                                        {!! Form::open(['action' => ['LessonController@destroy', $item->id], 'method'=>'POST',  'class'=> '', 'onsubmit'=> 'return confirm("Are you sure ?")']) !!}
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
@endsection
@section('page_script')
<script>
  $(function () {
       $("#dataTabel").DataTable({
           "pageLength": 10,
           "responsive": true
       });
   });
</script> 
@endsection