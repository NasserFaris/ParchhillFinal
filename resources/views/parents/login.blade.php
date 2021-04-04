<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{csrf_token()}}">
<title>Parchhill</title>
    <link rel="icon" href="{{ URL::asset('assets/images/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href=" {{ URL::asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('assets/css/fontsicon.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('assets/css/maincss.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('assets/css/responsive.css') }}">

</head>
<body>
    <Section class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10 mt-5">
                    <div class="content mt-5">
                        {!! Form::open(['action' => 'ParentController@doLogin', 'method'=>'POST', 'id'=>'details_form']) !!}
                            @include('admin.inc.messages')
                            <div class="title">
                                <h1>
                                    Login
                                </h1>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 align-self-center col-form-label">Email<span>*</span></label>
                                <div class="col-sm-6">
                                    {{ Form::text('email', Input::old('email'), array_merge(['class' => 'form-control'], ['required'=>'required'])) }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 align-self-center col-form-label">Password<span>*</span></label>
                                <div class="col-sm-6">
                                    <input type="password" name="password" class="form-control" required >
                                    {{-- {{ Form::text('password', '', array_merge(['class' => 'form-control'], ['required'=>'required'])) }} --}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="offset-md-2 col-md-6">
                                    <div class="link">
                                        <button class="btn btn-lg bg-yellow" type="submit">Login</button>
                                </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </Section> 
</body>
<div class="clearfix"></div>
<script src="  {{ URL::asset('assets/js/jquery-3.4.1.min.js') }} "></script>
<script src="  {{ URL::asset('assets/js/popper.min.js') }}"></script>
<script src="  {{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
<script src="  {{ URL::asset('assets/js/script.js') }}"></script> 

</html>       

