
@extends('admin.dashboard')
@section('content')
<div class="content-header">
   
  </div>

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">PH TV's</h3>
                <span class="float-sm-right"><a href="{{ url('/') }}/ph_tv/create" class="btn btn-success btn-sm" >Create </a></span>
              </div>           
                <div class="card-body">                
                    @if(count($ph_tv))
                        <table class="table table-bordered table-striped dataTable no-footer" id="dataTable">
                            <thead>
                                <th> Video</th>
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </thead>
                            <tbody>
                            @foreach ($ph_tv as $item)
                                <tr>
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
                                    <td>{{$item->description}}</td>  
                                    <td><a class="btn btn-info  btn-sm" href="{{url('/')}}/ph_tv/{{$item->id}}/edit">Edit</a>  </td>  
                                    <td>
                                        {!! Form::open(['action' => ['Ph_TvController@destroy', $item->id], 'method'=>'POST',  'class'=> '', 'onsubmit'=> 'return confirm("Are you sure ?")']) !!}
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