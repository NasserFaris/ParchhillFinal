
@extends('admin.dashboard')
@section('content')
<div class="content-header">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('/')}}/bower_components/admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('/')}}/bower_components/admin-lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- DataTables -->
<script src="{{url('/')}}/bower_components/admin-lte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{url('/')}}/bower_components/admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{url('/')}}/bower_components/admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{url('/')}}/bower_components/admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

  </div>

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Assessments Solutions</h3>
                {{-- <span class="float-sm-right"><a href="{{ url('/') }}/subject/create" class="btn btn-success btn-sm" >Create </a></span> --}}
              </div>           
                <div class="card-body ">                
                    @if(count($answers))
                        <table class="table " id="example1">
                            <thead>
                                <th> Parent name</th>
                                <th> Child name</th>
                                <th> Subject </th>
                                <th> Year </th>
                                <th> Question </th>
                                <th> Child answer </th>
                                <th> Right answer </th>
                                <th> Is right </th>
                            </thead>
                            <tbody>
                            @foreach ($answers as $item)
                                <tr>
                                  <td>
                                    @foreach ($parents as $parent)
                                        @if ($parent->id == $item->student_id)
                                            {{$parent->parent_name}}
                                        @endif
                                    @endforeach 
                                  </td>
                                  <td>
                                    @foreach ($parents as $parent)
                                        @if ($parent->id == $item->student_id)
                                            {{$parent->child_name}}
                                        @endif
                                    @endforeach 
                                  </td>
                                  <td>
                                    @foreach ($assessments as $assessment)
                                      @foreach ($subjects as $subject)
                                          @if ($subject->id == $assessment->subject_id  && $assessment->id == $item->assessment_id )
                                              {{$subject->name}}
                                          @endif
                                      @endforeach 
                                    @endforeach 
                                  </td>
                                  <td>
                                    @foreach ($assessments as $assessment)
                                      @foreach ($years as $year)
                                          @if ($year->id == $assessment->school_year_id  && $assessment->id == $item->assessment_id )
                                              {{$year->name}}
                                          @endif
                                      @endforeach 
                                    @endforeach 
                                  </td>
                                  <td>
                                    @foreach ($assessments as $assessment)
                                        @if ($assessment->id == $item->assessment_id)
                                            {{$assessment->question}}
                                        @endif
                                    @endforeach 
                                  </td>
                                  <td>
                                    @foreach ($assessments as $assessment)
                                        @if ($assessment->id == $item->assessment_id)
                                            {{$assessment->rightanswer}}
                                        @endif
                                    @endforeach 
                                  </td>
                                                                       
                                    <td>{{$item->question_answer}}</td>

                                    <td>
                                      @foreach ($assessments as $assessment)
                                          @if ($assessment->id == $item->assessment_id)
                                             {{ ($assessment->rightanswer  == $item->question_answer) ? 'True'  : 'False'}}
                                          @endif
                                      @endforeach 
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
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      
    });
  </script>
<!-- /.content-header -->    
@endsection