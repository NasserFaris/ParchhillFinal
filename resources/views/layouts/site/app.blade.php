<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no,user-scalable=no">
    <title>Parchhill</title>
    <link rel="icon" href="{{ URL::asset('assets/images/favicon.png') }}" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">    
    <link rel="stylesheet" href=" {{ URL::asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('assets/css/fontsicon.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('assets/css/hover-min.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('assets/css/styleweb.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('assets/css/responsive.css') }}">  
</head>

<body>
  <!-- Header -->
  <header>
    <div class="topheader">
      <h1>CALL US NOW ON 020 3092 3093</h1>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand hvr-grow" href="{{ URL('/')}}">
          <img src="{{ URL::asset('assets/images/PH-logo.jpg') }}" alt="logo" width="200">
        </a>

        <div class="collapse navbar-collapse  justify-content-end">
          <ul class="navbar-nav">
            <li class="nav-item {{(request()->is('resources')) ? 'active' : '' }} ">
              <a class="nav-link hvr-grow" href="{{URL('/resources')}}"> Resources </a>
            </li>
            <li class="nav-item {{(request()->is('find-a-center')) ? 'active' : '' }}">
              <a class="nav-link   hvr-grow" href="{{URL('/find-a-center')}}">Find a Centre </a>
            </li>
            <li class="nav-item {{(request()->is('online-learning')) ? 'active' : '' }}">
              <a class="nav-link   hvr-grow" href="{{URL('/online-learning')}}"> Packages </a>
            </li>
            <li class="nav-item {{(request()->is('free-tuition')) ? 'active' : '' }}">
              <a class="nav-link   hvr-grow" href="{{URL('/free-tuition')}}"> Free Tuition </a>
            </li>
            <li class="nav-item {{(request()->is('why-choose-us')) ? 'active' : '' }}">
              <a class="nav-link   hvr-grow" href="{{URL('/why-choose-us')}}"> Why Choose Us </a>
            </li>

          </ul>

        </div>
        <div class="collapse navbar-collapse  justify-content-end">
          <ul class="navbar-nav ">
            <li class="nav-item bar-login">
              <a type="button" class="nav-link hvr-grow" data-toggle="modal" data-target="#login"> Login </a>
            </li>
            <li class="nav-item bar-join">
              <a class="nav-link   hvr-grow" href="#">Join </a>
            </li>
          </ul>

        </div>
        <div class="navbar-toggler navbar-right border-0 ">
          <a onclick="openSideMenu()" type="button" class="d-inline-block border-0" aria-expanded="false">
            <span class="icon-menu"></span>
          </a>
        </div>

      </div>
    </nav>
    
    @yield('header')

    <div id="side-menu" class="side-nav">
      <a class="btn-close" onclick="closeSideMenu()">&times;</a>
      <a href="{{URL('/resources')}}">Resources </a>
      <a href="{{URL('/find-a-center')}}">Find a Centre</a>
      <a href="{{URL('/online-learning')}}"> Packages </a>
      <a href="{{URL('/free-tuition')}}"> Free Tuition </a>
      <a href="{{URL('/why-choose-us')}}"> Why Choose Us </a>
      <a type="button" class="nav-link hvr-grow" data-toggle="modal" data-target="#login"> Login </a>
      <a class="nav-link   hvr-grow" href="#">Join </a>
    </div>
  </header>

  <!-- End Header -->
  <div class="clearfix"></div>

    @yield('content')

  <div class="clearfix"></div>
  <!-- Footer -->
  <footer class="sec-footer">
    <div class="footer-top">
      <div class="bg-sec">
        <div class="bg-green">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="part-one">
                  <h1>BECOME A TUTOR VOLUNTEER</h1>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row no-gutters part-two ">
            <div class="col-md-6 col-lg-3 ">
              <div class="content">
                <h1>Start an Assessment </h1>
                <ul>
                  <li><a href="#">Maths Assessment </a></li>
                  <li><a href="#">English Assessment</a></li>
                  <li><a href="#">11 Plus Assessment </a></li>
                  <li><a href="#">Yr 2 SATs Assessment </a></li>
                  <li><a href="#">Yr 6 SATs Assessment</a></li>
                  <li><a href="#">GCSE Assessment</a></li>

                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="content">
                <h1>Join Our Mission </h1>
                <ul>
                  <li><a href="{{URL('/careers')}}">Careers</a></li>
                  <li><a href="#">English Teacher</a></li>
                  <li><a href="#">Maths Teacher</a></li>
                  <li><a href="#">English Tutor</a></li>
                  <li><a href="#">Maths Tutor</a></li>
                  <li><a href="{{URL('/ph-tv')}}">Tutor Volunteer</a></li>

                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 ">
              <div class="content">
                <h1>Resources & Policies </h1>
                <ul>
                  <li><a href="{{URL('/policies')}}">Policies</a></li>
                  <li><a href="#">Support</a></li>
                  <li><a href="{{URL('/FAQ')}}">FAQ</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="{{URL('/blog')}}">Blog</a></li>
                  <li><a href="#">Parent Ladder</a></li>

                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 ">
              <div class="content">
                <h1>Contact Us </h1>
                <ul>
                  <li><a href="#">Support Line </a></li>
                  <li><a href="#">020 3093 3093</a></li>
                  <li><a href="#">ask@parchhill.com </a></li>
                </ul>
                <div class="social">
                  <ul>
                    <h1>Follow Us</h1>
                    <li><a href="#"> <span class="icon-facebook"></span></a></li>
                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                    <li><a href="#"><span class="icon-instagram"></span> </a></li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-btm">
      <div class="container">
        <div class="row">
          <div class="col">
            <ul>
              <li><a href="#">© Parch Hill </a></li>
              <li><a href="#">Terms</a></li>
              <li><a href="#">Privacy</a></li>
            </ul>
          </div>
        </div>
        <!-- Back to top -->
        <a class="back-to-top" href="#" data-animate="fadeInDown" data-delay=".95">
          <span class="icon-arrow-up"></span>
        </a>
        <!-- End of Back to top -->
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  <!-- Modal -->
  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginLabel">I am a...</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="content">
            <img src="assets/images/icons/parent-grad.png" alt="picture 1">
            <div class="text">
              <a href="https://parchhill.pk/site/public/parent/login" target="_blanck">Parent or Guardian</a>
              <p>You can find a trusted tutor
                for someone eles.</p>
            </div>
          </div>
          <div class="content">
            <img src="assets/images/icons/students.png" alt="picture 2">
            <div class="text">
              <a href="#">Student</a>
              <p>Get free help with your
                school work or find
                trusted tutors.</p>
            </div>
          </div>
          <div class="content">
            <img src="assets/images/icons/tutor.png" alt="picture 3">
            <div class="text">
              <a href="#">Tutor</a>
              <p>Reach thousands by teaching
                or answering questions.</p>
            </div>
          </div>
        </div>
        <div class="modal-footer border-0">
          <p class="d-inline-block m-0">Already have an account?</p>
          <a type="button" class="btn" data-dismiss="modal">login</a>
        </div>
      </div>
    </div>
  </div>
  <!--End Modal -->
  <script src="{{ URL::asset('assets/js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{ URL::asset('assets/js/popper.min.js')}}"></script>
  <script src="{{ URL::asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{ URL::asset('assets/js/wow.min.js')}}"></script>
  <script src="{{ URL::asset('assets/js/script.js')}}"></script> 
</body>

</html>