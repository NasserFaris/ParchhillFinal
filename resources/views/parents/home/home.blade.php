@extends('layouts.parents.app')
@section('content')
<div class="row">
    <div class="col-md-6 ">
        <div class="home">
            <a href="{{url('/')}}/parent/assessment" class="home-box bg-yellow"> My Assessment
            </a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="home">
            <a href="#" class="home-box bg-yellow"> Shop
            </a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="home">
            <a href="#" class="home-box bg-green-light font-size-lg"> Study
                Plan
            </a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="home">
            <a href="#" class="home-box bg-green-light font-size-lg"> Online
                Practice
            </a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="home">
            <a href="#" class="home-box bg-green-light font-size-lg">Study
                Skills
            </a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="home">
            <a href="#" class="home-box bg-green-light font-size-lg"> Certificaties
                & Rewards
            </a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <div class="home">
            <a href="{{url('/')}}/parent/lbooklets" class="home-box bg-trasnsparent font-size-sm"> Learning
                Booklets
            </a>
        </div>
    </div>
    <div class="col-md-2">
        <div class="home">
            <a href="{{url('/')}}/parent/worksheets" class="home-box bg-trasnsparent font-size-sm"> Worksheet
            </a>
        </div>
    </div>
    <div class="col-md-2">
        <div class="home">
            <a href="{{url('/')}}/parent/examPaper" class="home-box bg-trasnsparent font-size-sm"> Exam
                Papers
            </a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="home">
            <a href="#" class="home-box bg-trasnsparent font-size-lg"> Learning
                Games
            </a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="home">
            <a href="#" class="home-box bg-trasnsparent font-size-lg"> Parent
                Learning
            </a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 ">
        <div class="home">
            <a href="#" class="home-box bg-Beige">Progress
            </a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="home">
            <a href="{{url('/')}}/parent/student" class="home-box bg-Beige">My Children
            </a>
        </div>
    </div>
</div>
</div>
@endsection
