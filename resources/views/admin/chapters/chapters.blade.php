
@extends('admin.dashboard')
@section('content')
<div class="content-header">
   
  </div>

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Topics</h3>
                <span class="float-sm-right"><a href="{{ url('/') }}/topic/create" class="btn btn-success btn-sm" >Create </a></span>
              </div>           
                <div class="card-body">                
                    @if(count($chpters))
                        <table class="table table-bordered table-striped dataTable no-footer " id="dataTable">
                            <thead>
                                <th> Title</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </thead>
                            <tbody>
                            @foreach ($chpters as $item)
                                <tr>
                                    <td>{{$item->name}}</td>  
                                    <td><a class="btn btn-info  btn-sm" href="{{url('/')}}/topic/{{$item->id}}/edit">Edit</a>  </td>  
                                    <td>
                                        {!! Form::open(['action' => ['ChaptersController@destroy', $item->id], 'method'=>'POST',  'class'=> '', 'onsubmit'=> 'return confirm("Are you sure ?")']) !!}
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
       $("#dataTable").DataTable({
           "pageLength": 10
       });
   });
</script> 
@endsection