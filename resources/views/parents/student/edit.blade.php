@extends('layouts.parents.app')


@section('content')

{!! Form::open(['action' => ['StudentController@update',$student->id], 'method'=>'POST', 'id'=>'details_form']) !!}
    @include('admin.inc.messages')
    <div class="title">
        <h1>
            Edit
        </h1>
    </div>
    <div class="form-group row">
        <label  class="col-sm-2 align-self-center col-form-label">First Name <span>*</span></label>
        <div class="col-sm-6">
            {{ Form::text('First Name', $student->first_name , array_merge(['class' => 'form-control'], ['required'=>'required'])) }}
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 align-self-center col-form-label">Last Name <span>*</span></label>
        <div class="col-sm-6">
            {{ Form::text('Last Name', $student->last_name, array_merge(['class' => 'form-control'], ['required'=>'required'])) }}
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 align-self-center col-form-label">Year <span>*</span></label>
        <div class="col-sm-6">
            {{ Form::select('Year', $years->pluck('name', 'id'),$student->year, array_merge(['class' => 'form-control'])) }}
        </div>
    </div>

    <div class="title">
        <h1>
            subscription Details  
        </h1>
    </div>
    <div class="form-group row">
        <label  class="col-sm-2 align-self-center col-form-label">Package </label>
        <div class="col-sm-6">
             {{ Form::text('Package', (!empty($subscription->package_id)) ? $subscription->packages()[0]->name: 'Free',array_merge(['class' => 'form-control', 'disabled'=>'disabled'])) }}
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2  align-self-center col-form-label ">Upgrade/Downgrade </label>
        <div class="col-sm-6">
            <div class="collapse mb-3" id="changepass">           
                    {{ Form::select('changegrade', $package->pluck('name', 'id'),!empty($subscription->package_id) ? $subscription->package_id : '', array_merge(['class' => 'form-control'])) }}              
            </div>
            <a class="btn btn-lg text-yellow" data-toggle="collapse" href="#changepass" role="button" aria-expanded="true" aria-controls="changepass">
               Change 
            </a>
        </div>
    </div> 
    <div class="form-group row">
        <label class="col-sm-2 align-self-center col-form-label">Status </label>
        <div class="col-sm-6">
            {{ Form::text('status', !empty($subscription->status) ? $subscription->status : '', array_merge(['class' => 'form-control'])) }}
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 align-self-center col-form-label">Total per year</label>
        <div class="col-sm-6">
            {{ Form::text('total_per_year', !empty($subscription->total_per_year) ? $subscription->total_per_year : '' , array_merge(['class' => 'form-control'])) }}
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 align-self-center col-form-label">Renewal date</label>
        <div class="col-sm-6">
            {{ Form::text('renewl_date', !empty($subscription->renewal_date) ? $subscription->renewal_date : '' , array_merge(['id' => 'datepicker','class' => 'form-control'  , 'data-date-format'=> 'yyyy-mm-dd']  )) }}
        </div>
    </div>
    <div class="row">
        <div class="offset-md-2 col-md-6">
            <div class="link">
                <button class="btn btn-lg bg-yellow" type="submit" id="save">save</button>
           </div>
        </div>
    </div>
    {{ Form::hidden('_method', 'PUT')}}
    {!! Form::close() !!}

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
