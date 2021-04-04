@if(count($errors) > 0 )
 @foreach($errors->all() as $error)
 <div class="alert alert-danger m-10">
     {{$error}}
 </div>
 @endforeach
@endif

@if(session('success'))
  <div class="alert alert-success m-10">
    {{session('success')}}
  </div>
@endif
