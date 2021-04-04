
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
                <h3 class="card-title">Exam Papers</h3>
                <span class="float-sm-right"><a href="{{ url('/') }}/examPaper/create" class="btn btn-success btn-sm" >Create </a></span>
              </div>           
                <div class="card-body">                
                    @if(count($papers))
                        <table class="table table-bordered table-striped dataTable no-footer" id="dataTabel">
                            <thead>
                                <th> Title</th>
                                <th> Ages</th>
                                <th> Math </th> 
                                <th> English </th>
                                <th> M OCR </th> 
                                <th> M AQA </th> 
                                <th> M EDEXCEL </th>  
                                <th> E OCR </th> 
                                <th> E AQA </th> 
                                <th> E EDEXCEL </th> 
                                <th>Edit</th>
                                <th>Delete</th>
                            </thead>
                            <tbody>
                            @foreach ($papers as $item)
                                <tr> 
                                    <td>{{$item->title}}</td> 
                                    <td>{{$item->ages()[0]->name}}</td>  
                                  @if ($item->agePeriod_id != 9)
                                  <td> <a href="{{url('/')}}/examPaper/{{$item->id}}/{{'math_path'}}/download">DOWNLOAD</a> </td> 
                                  <td> <a href="{{url('/')}}/examPaper/{{$item->id}}/{{'english_path'}}/download">DOWNLOAD</a> </td> 
                                  @else
                                      <td> - </td>
                                      <td> - </td>
                                  @endif



                                  @if ($item->agePeriod_id == 9)
                                   
                                  <td> <a href="{{url('/')}}/examPaper/{{$item->id}}/{{'math_ocr'}}/download">DOWNLOAD</a> </td> 
                                  <td> <a href="{{url('/')}}/examPaper/{{$item->id}}/{{'math_aqa'}}/download">DOWNLOAD</a> </td> 
                                  <td> <a href="{{url('/')}}/examPaper/{{$item->id}}/{{'math_edexcel'}}/download">DOWNLOAD</a> </td>
                                  <td> <a href="{{url('/')}}/examPaper/{{$item->id}}/{{'english_ocr'}}/download">DOWNLOAD</a> </td> 
                                  <td> <a href="{{url('/')}}/examPaper/{{$item->id}}/{{'english_aqa'}}/download">DOWNLOAD</a> </td> 
                                  <td> <a href="{{url('/')}}/examPaper/{{$item->id}}/{{'english_edexcel'}}/download">DOWNLOAD</a> </td> 
                                  @else
                                      <td> - </td>
                                      <td> - </td>
                                      <td> - </td>
                                      <td> - </td>
                                      <td> - </td>
                                      <td> - </td>
                                  @endif

                                    <td><a class="btn btn-info  btn-sm" href="{{url('/')}}/examPaper/{{$item->id}}/edit">Edit</a>  </td>  
                                    <td>
                                        {!! Form::open(['action' => ['ExamPaperController@destroy', $item->id], 'method'=>'POST',  'class'=> '', 'onsubmit'=> 'return confirm("Are you sure ?")']) !!}
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