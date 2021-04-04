@extends('layouts.site.app')

@section('header')
<div class="btmheader">
  <div class="bg-green-light">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="breadcrum">
            <div class="bread-list">
              <ul>
                <li><a href="{{ URL('/')}}">Home</a></li>
                <li>Careers</li>
              </ul>
            </div>
            <div class="bread-title">
              <h1 aria-current="page">Careers</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-btmheader"></div>
</div>
@endsection
@section('content') 

<!-- Section Careers Banner -->
<section class="careers-banner">
  <div class="container-fluid ">
    <div class="row ">
      <div class="col-md-12 banner wow fadeIn  p-0">
        <div class="container">
          <div class="row">
            <div class="offset-lg-7 col-lg-5">
                <div class="banner-title">
                  <h1>
                      WANT TO MAKE
                      A DIFFERENCE?
                  </h1>
                </div>
              <div class="banner-dsc">
                  <p>
                      We are looking for
                      enthusiastic professionals
                      from all industries - qualified
                      teachers, academic writers,
                      university graduates,
                      undergraduates and A-Level
                      students with a great passion
                      for education who will inspire
                      students and parents
                      and in our mission
                      THE BEST
                      ‘EDUCATION FOR ALL’ 
                  </p>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>

  </div>
</section>
<!-- End Section Careers Banner-->

<div class="clearfix"></div>
<!-- Section Join Us -->
<section class="sec-joinus">
  <div class="part-one">
      <div class="heading">
          <div class="container">
              <div class="row">
                  <div class="col">
                      <h1>JOIN US TODAY</h1>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="part-two">
      <div class="container">
          <div class="content">
              <div class="row">
                  <div class="col">
                      <div class="title">
                          <h1>
                              LEARN SKILLS FOR LIFE THAT WILL HAVE LONG
                              LASTING SOCIAL IMPACT.
                          </h1>
                          <p>
                              Learning how to teach… will teach you for your future careers
                              and senior management positions, family life and beyond.
                          </p>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="sub-title">
                          <h1>Tutoring and mentoring will help you become more …</h1>
                      </div>
                  </div>
                  <div class="col-md-7">
                          <ul class="list"><li>Creative! </li></ul>
                          <ul class="list"> <li>Happy!</li></ul>
                          <ul class="list"><li>Resilient!</li></ul>
                          <ul class="list"><li>Empathetic!</li></ul>
                          <ul class="list"><li>Fulfilled!</li></ul>
                          <ul class="list"> <li>Organised!</li></ul>
                  </div>
                  <div class="col-md-5 d-flex align-items-center">
                      <img src="assets/images/trans-skills.png" alt="Transferable Skills" class="img-fluid d-none d-md-block d-lg-block">
                  </div>
                  <div class="col">
                      <div class="link">
                          <a href="#" type="button" class="btn  btn-lg bg-red"> Learn More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="part-thr">
      <div class="heading">
          <div class="container">
              <div class="row">
                  <div class="col">
                      <h1>How can I help make a Social Impact? Seriously How?</h1>
                  </div>
              </div>
          </div>
      </div>
      <div class="container">
          <div class="row no-gutters">
              <div class="col-md-4 d-flex align-self-stretch">
                <div class="box">
                  <h2>Help young people achieve  better  grades in   their exams.</h2>
                </div>
              </div>
              <div class="col-md-4 d-flex align-self-stretch">
                <div class="box">
                  <h2>Guide young people to develop new study skills for home and school.</h2>
                </div>
              </div>
              <div class="col-md-4 d-flex align-self-stretch">
                <div class="box">
                  <h2>Inspire young people to become ambitious for a successful future.</h2>
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="dsc">
                <p>
                  AND REALLY HELP MENTOR AND SUPPORT YOUNG PEOPLE
                  TO A BRIGHTER POSITIVE ‘GROWTH’ MINDSET.
                </p>
              </div>
            </div>
            <div class="col-md-12">
              <div class="link">
                <a href="#" type="button" class="btn  btn-lg bg-red"> Get Started</a>
              </div>
            </div>
          </div>
      </div>
  </div>
</section>
<!-- End Section Join Us-->

<div class="clearfix"></div>
<!-- Section Our Expert Train --> 
<section class="sec-exprt-train">
<div class="container-fluid">
  <div class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="heading">
          <h1>
            Our Experts will train you
            because training is the
            key to success.
          </h1>
        </div>
        <div class="sub-heading">
          <h1>
            Believe in Our Mission? <br>
            <span class="text-yellow"> Join now.</span>
          </h1>
        </div>
      </div>
      <div class="col-md-6 d-flex align-items-center">
        <div>
          <img src="assets/images/train-001.jpg" alt="Train" class="img-fluid">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 text-center">
        <div class="title">
          <h1>
            Tutor
          </h1>
        </div>
        <div class="dsc">
          <p>
            Great Academic Results.
            Excellent Role Model.
            Positive Happy Person!
          </p>
        </div>
        <a href="#" type="button" class="btn  btn-lg bg-red"> Join Mission</a>
      </div>
      <div class="col-md-6 text-center">
        <div class="title">
          <h1>
            Mentor
          </h1>
        </div>
        <div class="dsc">
          <p>
            Great Academic Results.
            Excellent Role Model.
            Positive Happy Person!
          </p>
        </div>
        <a href="#" type="button" class="btn  btn-lg bg-red"> Join Mission</a>
      </div>
    </div>
  </div>
</div>
</section>
<!-- End Our Expert Train  --> 

<div class="clearfix"></div>
<!-- Section Mission  --> 
<section class="sec-mission">
<div class="part-one">
  <div class="bg-img"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heading">
          <h1>
            NOT SURE WHERE YOU FIT AND A br
            DESIRE TO JOIN OUR MISSION?
          </h1>  
        </div>
        <div class="text">
          <p>
            Our amazing team is dedicated to providing excellent first-class
            support and service to our members and their families. In these
            roles you are a true Parch Hill ambassador, motivated and
            driven to make UK education great.
          </p>
        </div>
        <a href="#" type="button" class="btn  btn-lg bg-red"> Join Now</a>
      </div>
    </div>
  </div>
</div>
<div class="part-two">
  <div class="container">
    <div class="row">
      <div class="offset-md-6 col-md-6 offset-lg-7 col-lg-5" >
        <div class="heading">
          <h1>BECOME A
            VOLUNTEER TUTOR
            OR MENTOR NOW</h1>
        </div>
        <div class="dsc">
          <p>
            Volunteer and tutor or
            mentor a free school meal
            pupil and help all young
            people reach their maximum
            potential and have clear
            vision for their future.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="part-thr">
  <div class="container">
    <div class="row">
      <div class="offset-md-2 col-md-8 offset-md-2">
        <a href="#" type="button" class="btn  btn-lg bg-red"> Join Mission</a>
        <h2>
          YOU CAN MAKE A LIFE CHANGING
            DIFFERENCE AND LEARN ALONG THE WAY!
        </h2>
      </div>
    </div>
  </div>
</div>
</section>
<!-- End Section Mission --> 


  

 @endsection
  