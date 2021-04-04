<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{csrf_token()}}">
<title>Laravel</title>
    <link rel="stylesheet" href=" {{ URL::asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('assets/css/fontsicon.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('assets/css/hover-min.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('assets/css/main-reg.css') }}  ">
</head>
<body>
    <div class="container">
        <div id='app'>
            {{-- @include('admin.inc.messages') --}}
            @yield('content')
        </div>
    </div>
</body>
<script src="  {{ URL::asset('js/app.js') }}"></script>
<script src="  {{ URL::asset('assets/js/jquery-3.4.1.min.js') }} "></script>
<script src="  {{ URL::asset('assets/js/popper.min.js') }}"></script>
<script src="  {{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
<script src="  {{ URL::asset('assets/js/wow.min.js') }}"></script>
<script src="  {{ URL::asset('assets/js/script.js') }}"></script> 
@yield('app_script')
</html>