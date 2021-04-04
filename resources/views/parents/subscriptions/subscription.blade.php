@extends('layouts.parents.app')
@section('content')
     @if(count($Subscription))
     <div class="title">
        <h1>
            Subscription's details  
        </h1>
    </div>
    <div class="lessons">
        <table class="table ">
            <thead class="tb-header">
                <th>Child name</th>
                <th>Package</th>
                <th>Year</th>
                <th>Status</th>
                <th>Total Per Year</th>
                <th>Renewal Date</th>
            </thead>
            <tbody >
            @foreach ($Subscription as $item)            
                <tr class="bg-yellow">
                    <td>{{$item->first_name}} {{$item->last_name}}</td>
                    <td>
                        @foreach ($packages as $package)
                            @if ($package->id == $item->package_id)
                                {{$package->name}}
                            @endif
                        @endforeach 
                    </td>
                    <td>
                        @foreach ($years as $year)
                            @if ($year->id == $item->year)
                                {{$year->name}}
                            @endif
                        @endforeach 
                      </td>                    
                    <td>{{$item->status}}</td>  
                    <td>{{$item->total_per_year}}</td>
                    <td>{{$item->renewal_date}}</td>                    
                </td> 
                </tr>     
            @endforeach
        </tbody>
        </table>
    </div>
     @endif   
@endsection
