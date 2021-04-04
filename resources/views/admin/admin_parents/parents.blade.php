
@extends('admin.dashboard')
@section('content')
<div class="content-header">
   
  </div>

  <div class="content">
    <div class="container-fluid">
      <div class="row">   
        <div class="col-md-12 ">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Subscription</h3>
              </div>           
                <div class="card-body">                
                    @if(count($Subscription))
                        <table class="  table table-bordered table-striped dataTable no-footer" id="subscriptionTable">
                            <thead>
                                <th> Parent</th>
                                <th> Student</th>
                                <th> Package</th>
                                <th> Status</th>
                                <th> Total Per Year</th>
                                <th> Renewal Date</th>
                                {{-- <th></th>
                                <th></th> --}}
                            </thead> 
                            <tbody>
                            @foreach ($Subscription as $item)
                                <tr>
                                   <td>@if (count($item->student() ) > 0)
                                      {{$item->student()[0]->parent()[0]->parent_name}}                                      
                                    @endif</td>  
                                   <td>
                                    @if (count($item->student() ) > 0)
                                        {{$item->student()[0]->getFullNameAttribute()}}                                      
                                    @endif
                                   </td>  
                                    {{-- <td>{{   count($item->parent() ) > 0   ? $item->parent()[0]->parent_name  : ''}} </td>   --}}
                                    {{-- <td>{{$item->getFullNameAttribute()}}</td>   --}}
                                    <td>{{$item->packages()[0]->name}}</td>  
                                    <td>{{$item->status}}</td> 
                                    <td>{{$item->total_per_year}}</td> 
                                    <td>{{$item->renewal_date}}</td> 
                                    {{-- <td><a class="btn btn-info  btn-sm" href="{{url('/')}}/subject/{{$item->id}}/edit">Edit</a>  </td>  
                                    <td>
                                        {!! Form::open(['action' => ['SubjectsController@update', $item->id], 'method'=>'POST',  'class'=> '', 'onsubmit'=> 'return confirm("Are you sure")']) !!}
                                        {{ Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('delete',['class'=>' btn btn-danger btn-sm'])}}
                                        {!! Form::close() !!}                                         
                                    </td> --}}
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
       $("#subscriptionTable").DataTable({
           "pageLength": 10
       });
   });
</script> 
@endsection