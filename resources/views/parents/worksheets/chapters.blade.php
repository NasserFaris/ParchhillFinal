@extends('layouts.parents.app')
@section('content')
@if (count($workSheets)> 0)
<div class="heading">
  <h1>
    {{$workSheets[0]->years()[0]->name}}
    {{$workSheets[0]->subjects()[0]->name}}
  </h1>
  <p>
    {{$workSheets[0]->years()[0]->description}}
  </p>
</div>

{{-- <div class="heading">
  <h1>4Years 1 English</h1>
  <p> Parch Hill offers dozens of Year 1 English materials to explore and learn!
      Hover your mouse over any topic and then just click to dounload !
  </p>
</div> --}}
<div class="row row-cols-1 row-cols-md-3">


  {{-- @foreach ($workSheets as $workSheet)  
  <div class="col d-flex align-items-stretch">
    <div class="card ">
      <div class="card-body">
        <h3 class="card-title text-left">{{strtoupper($workSheet->chapters()[0]->name)}}</h3>
        <div class="card-list">
            <ol>                      
                <li><a href="{{url('/')}}/worksheet/{{$workSheet->id}}/download" >
                      {{$workSheet->topic}}
                </a></li>                  
            </ol>
        </div>
      </div>
    </div>
  </div>
  @endforeach --}}

  
  
  @foreach ($chapters as $chapter)  
  {{-- <?php $continue = true; ?>  
  @foreach ($workSheets as $item)
  @if ($item->chapter_id  != $chapter->id )                
    <?php $continue = false; ?>                          
  @endif
  @endforeach   

@if($continue) --}}

    <div class="col d-flex align-items-stretch">
      <div class="card ">
        <div class="card-body">
          <h3 class="card-title text-left">{{strtoupper($chapter->name)}}</h3>
          <div class="card-list">
              <ol>
                @foreach ($workSheets as $item)
                  @if ($item->chapter_id  == $chapter->id )                
                  <li><a href="{{url('/')}}/parent/worksheet/{{$item->id}}/download" target = "_blank">
                        {{$item->topic}}
                      </a></li>                    
                    @endif
                  @endforeach                  
              </ol>
          </div>
        </div>
      </div>
    </div>
{{-- @endif     --}}
  @endforeach 
</div>
@else
<div class="heading">
  <h1>
    No Worksheets for selecte uploades
  </h1>
   
</div>
@endif
@endsection
