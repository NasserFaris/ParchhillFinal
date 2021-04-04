@extends('layouts.exam.app')
@section('content')
    <assessment :examquestion =  "{{$Question}}"  ></assessment>
@endsection