
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
                <h3 class="card-title">School Years</h3>
                <span class="float-sm-right"><a href="{{ url('/') }}/schoolyear/create" class="btn btn-success btn-sm" >Create </a></span>
              </div>           
                <div class="card-body">                
                    @if(count($year))
                        <table class="table table-bordered table-striped dataTable no-footer " id="yearTable">
                            <thead>
                              <th>#</th>
                                <th> Name</th>
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </thead>
                            <tbody>
                              <?php  $i = 1 ?>
                            @foreach ($year as $item)
                            
                                <tr>
                                <td>{{$i}}</td>
                                    <td>{{$item->name}}</td>  
                                    <td>{{$item->description}}</td>  
                                    <td><a class="btn btn-info  btn-sm" href="{{url('/')}}/schoolyear/{{$item->id}}/edit">Edit</a>  </td>  
                                    <td>
                                        {!! Form::open(['action' => ['SchoolYearController@destroy', $item->id], 'method'=>'POST',  'class'=> '', 'onsubmit'=> 'return confirm("Are you sure ?")']) !!}
                                        {{ Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('delete',['class'=>' btn btn-danger btn-sm'])}}
                                        {!! Form::close() !!}                                         
                                    </td>
                                </tr>  
                                <?php $i ++ ?> 
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
       $("#yearTable").DataTable({
           "pageLength": 10
       });
   });
</script> 
@endsection
