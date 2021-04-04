@extends('layouts.parents.app')
@section('content')    
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="heading">
            <h1>Exam Papers</h1>
        </div>
    </div>
    <div class="offset-sm-1 col-sm-10">
        <div class="exam-papers">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th class="col name">
                            <div class="bg-yellow rounded-primary ">
                                <h1 class=" text-white p-4">
                                    Exam
                                </h1>
                            </div>
                            </th>
                        <th class="col detail-1">
                            <div class="bg-green-light  rounded-primary ">
                                <h1 class="text-white p-4">
                                    Age
                                </h1>
                            </div>
                            </th>
                    </tr>
                </thead>
                <tbody >
                    <tr>
                        <td rowspan="2" >
                            <div class="title">
                                <p  class="left-side">
                                    KS1 SATs <span></span> 7 Plus
                                </p>
                            </div>
                        </td>
                        <td>
                            <a href="{{ url('/') }}/parent/examPaper/1/ages" class="text">
                                <p  class="right-side">
                                    5-6
                                </p>
                            </a>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <a href="{{ url('/') }}/parent/examPaper/2/ages" class="text">
                                <p class="right-side">
                                    6-7
                                </p>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="4" >
                            <div class="title">
                                <p class="left-side">
                                    KS2 SATs <span></span> 10 Plus <span></span> 11 Plus
                                </p>
                            </div>
                        </td>
                        <td>
                            <a href="{{ url('/') }}/parent/examPaper/3/ages" class="text">
                                <p class="right-side">
                                    7-8
                                </p>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="{{ url('/') }}/parent/examPaper/4/ages" class="text">
                                <p class="right-side">
                                    8-9
                                </p>
                            </a>
                        </td>   
                    </tr>
                    <tr>
                        <td>
                            
                            <a href="{{ url('/') }}/parent/examPaper/5/ages" class="text">
                                <p class="right-side">
                                    9-10
                                </p>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="{{ url('/') }}/parent/examPaper/6/ages" class="text">
                                <p class="right-side">
                                    10-11
                                </p>
                            </a>
                        </td>
                     
                    </tr>
                    <tr>
                        <td rowspan="2">
                            <div class="title">
                                <p class="left-side">
                                    KS3 SATs <span></span> 13 +11
                                </p>
                            </div>
                        </td>
                        <td>
                            <a href="{{ url('/') }}/parent/examPaper/7/ages" class="text">
                                <p class="right-side">
                                    11 – 12
                                </p>
                            </a>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <a href="{{ url('/') }}/parent/examPaper/8/ages" class="text">
                                <p class="right-side">
                                    12 – 13
                                </p>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="title">
                                <p class="left-side">
                                    GCSE
                                </p>
                            </div>
                        </td>
                        <td>
                            <a href="{{ url('/') }}/parent/examPaper/9/ages" class="text">
                                <p class="right-side">
                                    14+
                                </p>
                            </a>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="2">
                            EXAM PAPERS AND ASSESSMENTS FOR EVERY YEAR!
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

</div>
@endsection
