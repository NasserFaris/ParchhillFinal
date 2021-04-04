
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
                <h3 class="card-title">worksheets</h3>
                <span class="float-sm-right"><a href="{{ url('/') }}/worksheet/create" class="btn btn-success btn-sm" >Create </a></span>
              </div>           
                <div class="card-body">                
                    @if(count($worksheets))
                        <table class="table table-bordered table-striped dataTable no-footer" id="dataTabel">
                            <thead>
                                <th> Year</th>
                                <th> Subject</th>                                
                                <th> Topic</th>
                                <th> Description </th> 
                                <th> File </th> 
                                <th>Edit</th>
                                <th>Delete</th>
                            </thead>
                            <tbody>
                            @foreach ($worksheets as $item)
                                <tr> 
                                    <td>{{$item->years()[0]->name}}</td>  
                                    <td>{{$item->subjects()[0]->name}}</td> 
                                    <td>
                                      @foreach ($chapters as $chapter)
                                        @if ($chapter->id == $item->chapter_id )
                                            {{$chapter->name}}
                                        @endif                                      
                                      @endforeach                                     
                                    </td>
                                    <td>{{$item->topic}}</td>  
                                    {{-- href="{{url('/')}}/worksheet/{{$item->id}}/download" --}}
                                    <td> <a href="{{url('/')}}/worksheet/{{$item->id}}/download">DOWNLOAD</a> </td>                                   
                                    <td><a class="btn btn-info  btn-sm" href="{{url('/')}}/worksheet/{{$item->id}}/edit">Edit</a>  </td>  
                                    <td>
                                        {!! Form::open(['action' => ['WorksheetController@destroy', $item->id], 'method'=>'POST',  'class'=> '', 'onsubmit'=> 'return confirm("Are you sure ?")']) !!}
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
           "pageLength": 10
       });
   });
</script> 
@endsection