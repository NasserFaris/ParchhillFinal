<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

<meta name="csrf-token" content="{{csrf_token()}}">
<title>Laravel</title>
{{-- ../public/css/app.css --}}
    <link rel="stylesheet" href=" {{ URL::asset('css/app.css') }}    ">

</head>
<body>
    <div class="container">
        <div id='app'>
            <assessment></assessment>
        </div>
    </div>
    {{-- ../public/js/app.js --}}
    <script src="  {{ URL::asset('js/app.js') }}"></script>
</body>

</html>