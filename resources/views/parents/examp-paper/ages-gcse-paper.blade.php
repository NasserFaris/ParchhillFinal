@extends('layouts.parents.app')
@section('content')    
 
    @if ($papers->count())
    <div class="heading">
        <h1>GCSE <span class="bg-green p-2 rounded-primary text-white">+14</span></h1>
    </div>
    <div class="exam-papers">
        <table class="table table-borderless">
            <thead>
                <tr >
                    <th class="col name">

                    </th>
                    <th class="col" colspan="3">
                        <div class="text-center">
                            <h1 class="text-green p-4">
                                Maths
                            </h1>
                        </div>
                    </th>
                    <th class="col"  colspan="3">
                        <div class="text-center">
                            <h1 class="text-green p-4">
                                English
                            </h1>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody >
                <tr>
                    <td>
                        <div class="  justify-content-start pl-3">
                            <p  class="left-side">
                                
                            </p>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="text bg-yellow border-0 m-1">
                            <p  class="right-side">
                                OCR
                            </p>
                        </a>
                    </td>
                    <td>
                        <a href="#" class="text bg-yellow border-0 m-1">
                            <p class="right-side">
                                AQA
                            </p>
                        </a>
                    </td>
                    <td>
                        <a href="#" class="text bg-yellow border-0 m-1">
                            <p class="right-side">
                                EDEXCEL
                            </p>
                        </a>
                    </td>
                    <td>
                        <a href="#" class="text bg-yellow border-0 m-1">
                            <p  class="right-side">
                                OCR
                            </p>
                        </a>
                    </td>
                    <td>
                        <a href="#" class="text bg-yellow border-0 m-1">
                            <p class="right-side">
                                AQA
                            </p>
                        </a>
                    </td>
                    <td>
                        <a href="#" class="text bg-yellow border-0 m-1">
                            <p class="right-side">
                                EDEXCEL
                            </p>
                        </a>
                    </td>
                </tr>
                
                @foreach ($papers as $item)

                <tr>
                    <td>
                        <div class="title justify-content-start pl-3">
                            <p  class="left-side">
                                {{$item->title}}
                            </p>
                        </div>
                    </td>
                    <td>
                        <a href="{{url("/")}}/parent/examPaper/{{$item->id}}/{{'math_ocr'}}/download" class="text bg-yellow border-0 m-1">
                            <p  class="right-side">
                                Download
                            </p>
                        </a>
                    </td>
                    <td>
                        <a href="{{url("/")}}/parent/examPaper/{{$item->id}}/{{'math_aqa'}}/download" class="text bg-yellow border-0 m-1">
                            <p class="right-side">
                                Download
                            </p>
                        </a>
                    </td>
                    <td>
                        <a href="{{url("/")}}/parent/examPaper/{{$item->id}}/{{'math_edexcel'}}/download" class="text bg-yellow border-0 m-1">
                            <p class="right-side">
                                Download
                            </p>
                        </a>
                    </td>
                    <td>
                        <a href="{{url("/")}}/parent/examPaper/{{$item->id}}/{{'english_ocr'}}/download" class="text bg-yellow border-0 m-1">
                            <p  class="right-side">
                                Download
                            </p>
                        </a>
                    </td>
                    <td>
                        <a href="{{url("/")}}/parent/examPaper/{{$item->id}}/{{'english_aqa'}}/download" class="text bg-yellow border-0 m-1">
                            <p class="right-side">
                                Download
                            </p>
                        </a>
                    </td>
                    <td>
                        <a href="{{url("/")}}/parent/examPaper/{{$item->id}}/{{'english_edexcel'}}/download" class="text bg-yellow border-0 m-1">
                            <p class="right-side">
                                Download
                            </p>
                        </a>
                    </td>
                </tr>
                @endforeach

                 
            </tbody>
        </table>
    </div>

    @else
    <div class="heading">
        <h1>No  exam paper for  AGE <span class="bg-green p-2 rounded-primary text-white">{{str_replace(' ', '', $age->name) }}</span></h1>
    </div>
    @endif



@endsection