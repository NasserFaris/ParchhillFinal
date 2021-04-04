<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{csrf_token()}}">
<title>Parchhill</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="icon" href="{{ URL::asset('assets/images/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href=" {{ URL::asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('assets/css/fontsicon.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('assets/css/maincss.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('assets/css/responsive.css') }}">

</head>
<body>
  <!-- Header -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand hvr-grow" href="index.html">
          <h1>My</h1>
          <img src="{{ URL::asset('assets/images/PH-logo.jpg') }}" alt="logo" width="200">
        </a>

        <div class="collapse shape-curve navbar-collapse  justify-content-center">

            <ul class="navbar-nav ">
                <li class="nav-item ">
                    <a class="nav-link hvr-grow" > PARENT LOGIN AND </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hvr-grow" >DASHBOARD </a>
                </li>
            </ul>
          {{-- <ul class="navbar-nav ">
            <li class="nav-item ">
              <a class="nav-link hvr-grow" href=""> <span>360</span> Learning Zone </a>
            </li>
            <li class="nav-item">
              <a class="nav-link   hvr-grow" href="">

                
@if ((request()->is('parent/worksheets/*')) || (request()->is('parent/worksheets')))
     My worksheets 
 @endif
 @if ((request()->is('parent/assessment')) || (request()->is('parent/assessment/*'))  )
     My Assessment 
 @endif
 @if ((request()->is('parent/lbooklets')) || (request()->is('parent/lbooklets/*')))
 My Learning Booklets 
@endif

@if ((request()->is('parent/details')))
 My Details 
@endif
@if ((request()->is('parent/account')))
 My Account 
@endif
@if ((request()->is('parent/student')) || (request()->is('parent/student/*')))
 My Cheldren 
@endif

@if ((request()->is('parent/notifications')))
 My Notifications 
@endif

@if ((request()->is('parent/subscription')) || (request()->is('parent/subscription/*')))
 My Subscription 
@endif
                 
                
              </a>
            </li>
          </ul> --}}

        </div>




        <div class="collapse navbar-collapse  justify-content-center">
          <ul class="navbar-nav ">
              <li class="nav-item bar-join ">
                  <a class="nav-link  hvr-grow" href="{{url('/')}}/parent/index">Home </a>
              </li>
              <li class="nav-item bar-join">
                  <a class="nav-link  hvr-grow" href="#">Notifications </a>
              </li>
              <li class="nav-item bar-join ">

                  <div class="dropdown">
                      <a class="nav-link  dropdown-toggle" href="#" id="dropAccount"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Account
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropAccount">
                          <a class="dropdown-item" href="#">My Details</a>
                          <a class="dropdown-item" href="#">My Account</a>
                          <a class="dropdown-item" href="{{url('/')}}/parent/logout">Log Out </a>
                      </div>
                  </div>
              </li>
          </ul>

      </div>

        {{-- <div class="collapse navbar-collapse  justify-content-center">
          <ul class="navbar-nav ">
            <li class="nav-item bar-join">
              <a class="nav-link   hvr-grow" href="{{url('/')}}/parent/logout">Log Out </a>
            </li>
          </ul>

        </div> --}}
        <div class=" navbar-toggler navbar-right border-0">
          <a onclick="openSideMenu()" type="button" class="d-inline-block border-0 hvr-outline-in"
            aria-expanded="false">
            <span class="icon-menu text-dark font-size-30"></span>
          </a>
        </div>

      </div>
    </nav>

    <div id="side-menu" class="side-nav">
      <a class="btn-close" onclick="closeSideMenu()">&times;</a>
      <a href="{{url('/')}}/parent/worksheets">Worksheets </a>
      <a href="{{url('/')}}/parent/assessment">My Assessments</a>
      <a href="#"> My Study Plan </a>
      <a href="{{url('/')}}/parent/lbooklets""> Learning Booklets </a>
      <a href="{{url('/')}}/parent/details"> My Details</a>
      <a href="{{url('/')}}/parent/account"> My Account </a>
      <a href="{{url('/')}}/parent/student"> My Cheldren </a>
      <a href="{{url('/')}}/parent/subscription">My Subscription</a> 
      <a href="{{url('/')}}/parent/notifications">My Notifications </a>
      <li><a href="#">Online practice</a> </li>
      <li><a href="#">Exam Papers</a> </li>
      <li><a href="#">Study Skills</a> </li>
      <li><a href="#">Certificates & Rewards</a> </li>
      <li><a href="#">Parent Learning</a> </li>
      <li><a href="#">Shop</a> </li>
    </div>



    <div id="side-menu" class="side-nav">

      
  </div>
  </header>
    <!-- End Header -->
    <div class="clearfix"></div>
    <!-- Section Main Content Parents -->
  <Section class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2 d-none d-md-block p-0">
          <div class="side-menu">
            <div class="heading">
              <h1> Home </h1>
            </div>
            <div class="heading">
              <h1>Activities</h1>
            </div>
            <div class="list">
              <ul>
                <li class="{{ (request()->is('parent/worksheets')) || (request()->is('parent/worksheets/*')) ? 'active' : '' }}"><a href="{{url('/')}}/parent/worksheets"> Worksheets</a></li>
                <li class="{{ (request()->is('parent/assessment')) ? 'active' : '' }}"><a href="{{url('/')}}/parent/assessment"> My Assessments</a></li>
                <li><a href="#">My Study Plan</a> </li>
                <li class="{{ (request()->is('parent/lbooklets')) ? 'active' : '' }}"><a href="{{url('/')}}/parent/lbooklets"> Learning Booklets</a></li>


                <li><a href="#">Online Practice</a> </li>
                <li class="{{ (request()->is('parent/examPaper')) || (request()->is('parent/examPaper/*')) ? 'active' : '' }}"><a href="{{url('/')}}/parent/examPaper">Exam Papers</a> </li>
                <li><a href="#">Study Skills</a> </li>
                <li><a href="#">Certificates & Rewards</a> </li>
                <li><a href="#">Parent Learning</a> </li>
                <li><a href="#">Shop</a> </li>
              </ul>
            </div>
            <div class="heading">
              <h1>Accounts</h1>
            </div>
            <div class="list">
              <ul>
                <li class="{{ (request()->is('parent/details')) ? 'active' : '' }}"><a href="{{url('/')}}/parent/details">My Details</a></li>
                <li class="{{ (request()->is('parent/account')) ? 'active' : '' }}"><a href="{{url('/')}}/parent/account">My Account</a></li>
                <li class="{{ (request()->is('parent/student')) || (request()->is('parent/student/*'))? 'active' : '' }}"><a href="{{url('/')}}/parent/student">My Children</a> </li>
                <li class="{{ (request()->is('parent/subscription')) ? 'active' : '' }}"><a href="{{url('/')}}/parent/subscription">My Subscription</a> </li>
                <li class="{{ (request()->is('parent/notifications')) ? 'active' : '' }}"><a href="{{url('/')}}/parent/notifications">My Notifications</a> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-10">
            <div class="content">
                @yield('content')
            </div>
        </div>
        
    </div>
  </div>
</Section>    
<!-- End Section Main Content Parents -->

<div class="clearfix"></div>
<!-- Footer -->
<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul>
                        <li><a href="{{url('/')}}/parent/logout">Logout </a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->     
</body>
<div class="clearfix"></div>
<script src="  {{ URL::asset('assets/js/jquery-3.4.1.min.js') }} "></script>
<script src="  {{ URL::asset('assets/js/popper.min.js') }}"></script>
<script src="  {{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
<script src="  {{ URL::asset('assets/js/script.js') }}"></script> 
@yield('app_script')
</html>