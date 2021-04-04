
@extends('admin.dashboard')
@section('content')
<div class="content-header">
   
  </div>

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Stages</h3>
                <span class="float-sm-right"><a href="{{ url('/') }}/stages/create" class="btn btn-success btn-sm" >Create </a></span>
              </div>           
                <div class="card-body p-0">                
                    @if(count($stages))
                        <table class="table ">
                            {{-- <thead>
                                <th> Subjects</th>
                                <th></th>
                                <th></th>
                            </thead> --}}
                            <tbody>
                            @foreach ($stages as $item)
                                <tr>
                                    <td>{{$item->name}}</td>  
                                    <td><a class="btn btn-info  btn-sm" href="{{url('/')}}/stages/{{$item->id}}/edit">Edit</a>  </td>  
                                    <td>
                                        {!! Form::open(['action' => ['StagesController@destroy', $item->id], 'method'=>'POST',  'class'=> '', 'onsubmit'=> 'return confirm("Are you sure")']) !!}
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