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
                <li>BLOG</li>
              </ul>
            </div>
            <div class="bread-title">
              <h1 aria-current="page">BLOG</h1>
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
  <!-- Section BLOg -->
  <section class="sec-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="heading">
            <h1>
              Find useful tips, advice and stay up to date with
              latest news and views with our blog.
            </h1>
          </div>
          <div class="dsc bg-yellow">
            <p>
              Start the learning journey with a FREE English and
              Maths Online Assessment and a Comprehensive
              Parent Feedback Report.
            </p>
          </div>
          <div class="link"> 
            <a href="{{URL('/parent/register')}}" type="button" class="d-inline-block btn btn-lg bg-red ">Start Assessment</a>
          </div>
        </div>
      </div> 
      <div class="row row-cols-1 row-cols-md-2">
        <div class="col ">
          <div class="card">
            <img src="assets/images/blog-01.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">How to keep your child engaged
                in home learning </h5>
                <p class="card-date">
                  April 3, 2020 
                </p>
              <p class="card-text">Millions of children across the country
                are currently completing their learning at
                home. At Explore Learning, we know the
                importance of engagement...</p>
            </div>
            <div class="card-footer">
                <a href="#" type="button" class="d-inline-block btn btn-lg bg-yellow ">Read This Post</a>
            </div>
          </div>
        </div>
        <div class="col ">
          <div class="card">
            <img src="assets/images/blog-01.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">How to keep your child engaged
                in home learning </h5>
                <p class="card-date">
                  April 3, 2020 
                </p>
              <p class="card-text">Millions of children across the country
                are currently completing their learning at
                home. At Explore Learning, we know the
                importance of engagement...</p>
            </div>
            <div class="card-footer">
                <a href="#" type="button" class="d-inline-block btn btn-lg bg-yellow ">Read This Post</a>
            </div>
          </div>
        </div>
        <div class="col ">
          <div class="card">
            <img src="assets/images/blog-01.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">How to keep your child engaged
                in home learning </h5>
                <p class="card-date">
                  April 3, 2020 
                </p>
              <p class="card-text">Millions of children across the country
                are currently completing their learning at
                home. At Explore Learning, we know the
                importance of engagement...</p>
            </div>
            <div class="card-footer">
                <a href="#" type="button" class="d-inline-block btn btn-lg bg-yellow ">Read This Post</a>
            </div>
          </div>
        </div>
        <div class="col ">
          <div class="card">
            <img src="assets/images/blog-01.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">How to keep your child engaged
                in home learning </h5>
                <p class="card-date">
                  April 3, 2020 
                </p>
              <p class="card-text">Millions of children across the country
                are currently completing their learning at
                home. At Explore Learning, we know the
                importance of engagement...</p>
            </div>
            <div class="card-footer">
                <a href="#" type="button" class="d-inline-block btn btn-lg bg-yellow ">Read This Post</a>
            </div>
          </div>
        </div>

      </div>
      <div class="row mt-4">
        <div class="col-md-12">
          <div class="dsc bg-green-light">
            <p class="text-white text-wrap">
              Your  <strong class="font-arialblack">Parent COVID-19 Education Guide</strong> with br
              all the tips and information you need from doctors, 
              qualified teachers and home educators.
            </p>
          </div>
          <div class="link"> 
            <a href="#" type="button" class="d-inline-block btn btn-lg bg-red ">Download Guide</a>
          </div>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-2 mt-4">
        <div class="col ">
          <div class="card">
            <img src="assets/images/blog-01.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">How to keep your child engaged
                in home learning </h5>
                <p class="card-date">
                  April 3, 2020 
                </p>
              <p class="card-text">Millions of children across the country
                are currently completing their learning at
                home. At Explore Learning, we know the
                importance of engagement...</p>
            </div>
            <div class="card-footer">
                <a href="#" type="button" class="d-inline-block btn btn-lg bg-yellow ">Read This Post</a>
            </div>
          </div>
        </div>
        <div class="col ">
          <div class="card">
            <img src="assets/images/blog-01.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">How to keep your child engaged
                in home learning </h5>
                <p class="card-date">
                  April 3, 2020 
                </p>
              <p class="card-text">Millions of children across the country
                are currently completing their learning at
                home. At Explore Learning, we know the
                importance of engagement...</p>
            </div>
            <div class="card-footer">
                <a href="#" type="button" class="d-inline-block btn btn-lg bg-yellow ">Read This Post</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col">
          
          <div class="link mt-5 mb-5"> 
            <a href="#" type="button" class="d-inline-block btn btn-lg bg-red ">Stay Connected</a>
          </div>
          <div class="social">
              <ul>
                <li><a href="#"> <span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span> </a></li>
                <li><a href="#"><span class="icon-youtube-play"></span> </a></li>
              </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section BLOG-->

  <div class="clearfix"></div>

  <!-- Section Consultation  -->
  <section class="sec-consul">
    <div class="bg-sec">
    </div>
    <div class="part-one">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1>FREE ONLINE ENGLISH <br>
                ASSESSMENT FOR YOUR CHILD.
            </h1>
            <a href="{{URL('/parent/register')}}" type="button" class="btn  btn-lg bg-red">Start Assessment </a>
            <p>AND YOU WILL RECEIVE A COMPREHENSIVE PARENT
              FEEDBACK REPORT.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section Consultation -->

 @endsection
  