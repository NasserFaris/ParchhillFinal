@extends('layouts.parents.app')


@section('content')

{!! Form::open(['action' => 'StudentController@store', 'method'=>'POST', 'id'=>'details_form']) !!}
    @include('admin.inc.messages')
    <div class="title">
        <h1>
            Children Details 
        </h1>
    </div>
    <div class="form-group row">
        <label  class="col-sm-2 align-self-center col-form-label">First Name <span>*</span></label>
        <div class="col-sm-6">
            {{ Form::text('First Name', '', array_merge(['class' => 'form-control'], ['required'=>'required'])) }}
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 align-self-center col-form-label">Last Name <span>*</span></label>
        <div class="col-sm-6">
            {{ Form::text('Last Name', '', array_merge(['class' => 'form-control'], ['required'=>'required'])) }}
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 align-self-center col-form-label">Year <span>*</span></label>
        <div class="col-sm-6">
            {{ Form::select('Year', $years->pluck('name', 'id'),'', array_merge(['class' => 'form-control'])) }}
        </div>
    </div>

    <div class="title">
        <h1>
            Subscription Details  
        </h1>
     </div>
    <div class="form-group row">
        <label  class="col-sm-2 align-self-center col-form-label">Subscription type</label>
        <div class="col-sm-6">
             {{ Form::text('Package', (!empty($Subscription[0]->package_id)) ? $Subscription[0]->packages()[0]->name: 'Free',array_merge(['class' => 'form-control', 'disabled'=>'disabled'])) }}
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2  align-self-center col-form-label ">Upgrade/Downgrade </label>
        <div class="col-sm-6">
            <div class="collapse mb-3" id="changepass">           
                    {{ Form::select('changegrade', $package->pluck('name', 'id'),'', array_merge(['class' => 'form-control'])) }}              
            </div>
            <a class="btn btn-lg text-yellow" data-toggle="collapse" href="#changepass" role="button" aria-expanded="true" aria-controls="changepass">
               Change 
            </a>
        </div>
    </div> 
    <div class="form-group row">
        <label class="col-sm-2 align-self-center col-form-label">Status </label>
        <div class="col-sm-6">
            {{ Form::text('status', '', array_merge(['class' => 'form-control'])) }}
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 align-self-center col-form-label">Total per year</label>
        <div class="col-sm-6">
            {{ Form::text('total_per_year', '', array_merge(['class' => 'form-control'])) }}
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 align-self-center col-form-label">Renewal date</label>
        <div class="col-sm-6">
            {{ Form::text('renewl_date', '', array_merge(['id' => 'datepicker','class' => 'form-control'  , 'data-date-format'=> 'yyyy-mm-dd']  )) }}
        </div>
    </div>


    <div class="row">
        <div class="offset-md-2 col-md-6">
            <div class="link">
                <button class="btn btn-lg bg-yellow" type="submit" id="save">save</button>
           </div>
        </div>
    </div>
     {!! Form::close() !!}
   


@if(count($students))
<div class="title">
    <h1>
        Children details  
    </h1>
</div>
<div class="lessons">
<table class="table ">
    <thead class="tb-header">
        <th>First name</th>
        <th>Last name</th>
        <th>Year</th>
        <th>Subcription</th>
        <th>Status</th>
        <th>Action</th> 
    </thead>
    <tbody >
    @foreach ($students as $item)
        <tr class="bg-yellow">
            <td>{{$item->first_name}}</td> 
            <td>{{$item->last_name}}</td>  
            
            <td>

                {{$item->years()[0]->name}}
            </td>
            <td>
                @if (count($item->subscription()) > 0)                   
                    {{$item->subscription()->last()->packages()[0]->name}}
                @endif                
            </td>
            <td>
                @if (count($item->subscription() ) > 0)                    
                    {{$item->subscription()->last()->status}}
                @endif                
            </td>

            <td><a class="btn btn-sm bg-green btn-sm" href="{{url('/')}}/parent/student/{{$item->id}}/edit">Edit</a> 
            {{-- <a class="btn btn-danger  btn-sm" href="{{url('/')}}/parent/student/{{$item->id}}/edit">delet</a>  --}}
         </td> 
            {{-- <td>
                {!! Form::open(['action' => ['StudentController@update', $item->id], 'method'=>'POST',  'class'=> '', 'onsubmit'=> 'return confirm("Are you sure")']) !!}
                {{ Form::hidden('_method', 'DELETE')}}
                {{Form::submit('delete',['class'=>' btn btn-danger btn-sm'])}}
                {!! Form::close() !!}                                         
            </td> --}}
        </tr>     
    @endforeach
</tbody>
</table>
</div>
@endif
@endsection

@section('app_script')
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script>
$(function() {
    $( "#datepicker" ).datepicker({
        dateFormat: 'yy-mm-dd'
    });
  });
</script>
@endsection
