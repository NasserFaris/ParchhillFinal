@extends('layouts.parents.app')
@section('content')
    <div class="heading">
      <h1>Key Stage One</h1>
    </div>

    <div class="row row-cols-1 row-cols-md-3">
    @foreach ($years as $year)
    <?php $stage_1 = ['RECEPTION', 'YEAR 1','YEAR 2'] ;?>
      @if (in_array(strtoupper($year->name),$stage_1 ))
           <div class="col ">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">{{strtoupper($year->name)}}</h3>
                <p class="card-text">{{$year->description}}</p>
                <ul>                  
                  @foreach ($subjects as $item)
                  <li><a class="to_chapter"
                     href="{{ url('/') }}/parent/worksheets/chapters/{{$year->id}}/{{$item->id}}" >
                        {{$item->name}}
                      </a></li>  
                    <span>|</span> 
                  @endforeach
                </ul>
              </div>
            </div>
          </div>  
      @endif
    @endforeach
  </div>
    <div class="heading">
      <h1>Key Stage Two</h1>
    </div>
    <div class="row row-cols-1 row-cols-md-4">
      @foreach ($years as $year)
      <?php $stage_2 = ['YEAR 3','YEAR 4', 'YEAR 5', 'YEAR 6'] ;?>
        @if (in_array(strtoupper($year->name),$stage_2 )) 
            <div class="col ">
              <div class="card border-yellow">
                <div class="card-body">
                  <h3 class="card-title  bg-yellow">{{strtoupper($year->name)}}</h3>
                  <p class="card-text">{{$year->description}}</p>
  
                  <ul>                  
                    @foreach ($subjects as $item)
                    <li><a class="to_chapter"
                       href="{{ url('/') }}/parent/worksheets/chapters/{{$year->id}}/{{$item->id}}" >
                          {{$item->name}}
                        </a></li>  
                      <span>|</span> 
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>  
        @endif
      @endforeach         
    </div>
    <div class="heading">
      <h1>Key Stage Three</h1>
    </div>
    <div class="row row-cols-1 row-cols-md-3">
      @foreach ($years as $year)
      <?php $stage_3 = ['YEAR 7','YEAR 8', 'YEAR 9'] ;?>
        @if (in_array(strtoupper($year->name),$stage_3 )) 
     
            <div class="col ">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">{{strtoupper($year->name)}}</h3>
                  <p class="card-text">{{$year->description}}</p>
                  <ul>                  
                    @foreach ($subjects as $item)
                    <li><a class="to_chapter"
                       href="{{ url('/') }}/parent/worksheets/chapters/{{$year->id}}/{{$item->id}}" >
                          {{$item->name}}
                        </a></li>  
                      <span>|</span> 
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>  
        @endif
      @endforeach         
    </div>
    <div class="heading">
      <h1>Key Stage Four</h1>
    </div>
    <div class="row row-cols-1 row-cols-md-2"> 
      @foreach ($years as $year)
      <?php $stage_1 = ['YEAR 10','YEAR 11'] ;?>
        @if (in_array(strtoupper($year->name),$stage_1 )) 
            <div class="col ">
              <div class="card border-yellow">
                <div class="card-body">
                  <h3 class="card-title  bg-yellow">{{strtoupper($year->name)}}</h3>
                  <p class="card-text">{{$year->description}}</p>
  
                  <ul>                  
                    @foreach ($subjects as $item)
                    <li><a class="to_chapter"
                       href="{{ url('/') }}/parent/worksheets/chapters/{{$year->id}}/{{$item->id}}" >
                          {{$item->name}}
                        </a></li>  
                      <span>|</span> 
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>  
        @endif
      @endforeach 
       
    </div>
    <div class="row row-cols-1 row-cols-md-3 mt-5">
      @foreach ($years as $year)
      <?php $stage_1 = ['11 Plus','SATs', 'GCSE'] ;?>
        @if (in_array($year->name,$stage_1)) 
            <div class="col ">
              <div class="card ">
                <div class="card-body">
                  <h3 class="card-title">{{strtoupper($year->name)}}</h3>
                  <p class="card-text">{{$year->description}}</p>
  
                  <ul>                  
                    @foreach ($subjects as $item)
                    <li><a class="to_chapter"
                       href="{{ url('/') }}/parent/worksheets/chapters/{{$year->id}}/{{$item->id}}" >
                          {{$item->name}}
                        </a></li>  
                      <span>|</span> 
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>  
        @endif
      @endforeach        
    </div>
    <div class="row row-cols-1 row-cols-md-1 mt-5">



      @foreach ($years as $year)
      <?php $stage_5 = ['English as an Additional Language (EAL & ESOL)'] ;?>
        @if (in_array($year->name,$stage_5)) 
            <div class="col ">
              <div class="card border-yellow">
                <div class="card-body">
                  <h3 class="card-title bg-yellow">{{strtoupper($year->name)}}</h3>
                  <p class="card-text">{{$year->description}}</p>
  
                  <ul>                  
                    @foreach ($subjects as $item)
                    <li><a class="to_chapter"
                       href="{{ url('/') }}/parent/worksheets/chapters/{{$year->id}}/{{$item->id}}" >
                          {{$item->name}}
                        </a></li>  
                      <span>|</span> 
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>  
        @endif
      @endforeach 
    </div>
    
@endsection