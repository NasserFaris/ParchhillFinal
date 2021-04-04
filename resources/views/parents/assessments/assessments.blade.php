@extends('layouts.parents.app')
@section('content') 

@foreach ($students as $item)
    
<div class="childs">
    <p class="name">
        {{$item->first_name }} {{$item->last_name }}
    </p>
    <p class="asset">
        Baseline Online Assessment Report
    </p>
    <a class="btn btn-lg bg-yellow" type="submit">Download</a>
    
</div>


@endforeach
  
  <div class="package">
      <div class="title">
          <h1>Start Learning Package</h1>
      </div>
      <div class="box bg-x-light">
          <h1>
              ESSENTIALS
          </h1>
          <a class="btn btn-lg bg-yellow" type="submit">LEARN MORE</a>
      </div>
      <div class="box bg-m-light">
          <h1>
              ADVANCED
          </h1>
          <a class="btn btn-lg bg-yellow" type="submit">LEARN MORE</a>
      </div>
      <div class="box bg-green-light">
          <h1>
              COMPLETE
          </h1>
          <a class="btn btn-lg bg-yellow" type="submit">LEARN MORE</a>
      </div>
  </div>
@endsection
