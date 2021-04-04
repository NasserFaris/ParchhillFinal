@extends('layouts.parents.app')
@section('content')
{!! Form::open(['action' => ['SubscriptionController@update',$subscription->id], 'method'=>'POST', 'id'=>'details_form']) !!}
    @include('admin.inc.messages')
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
            {{ Form::text('status', $subscription->status, array_merge(['class' => 'form-control'], ['required'=>'required'])) }}
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 align-self-center col-form-label">Total per year</label>
        <div class="col-sm-6">
            {{ Form::text('total_per_year', $subscription->total_per_year, array_merge(['class' => 'form-control'], ['required'=>'required'])) }}
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 align-self-center col-form-label">Renewal date</label>
        <div class="col-sm-6">
            {{ Form::text('renewl_date', $subscription->renewal_date, array_merge(['id' => 'datepicker','class' => 'form-control'  , 'data-date-format'=> 'yyyy-mm-dd'], ['required'=>'required']   )) }}
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