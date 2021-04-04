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
                <li>PH TV</li>
              </ul>
            </div>
            <div class="bread-title">
              <h1 aria-current="page">PH TV</h1>
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
<!-- Section PH TV -->
<section class="sec-ph-tv">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="heading">
            <h1>Hear from our members and see what they have to say…</h1>
          </div>
        </div>
      </div>
      <div class="row">
        @if(count($ph_tv))
          @foreach ($ph_tv as $item)
          <?php 
            $url = str_replace('https://youtu.be/','https://www.youtube.com/embed/', $item->url);
          ?>        
            <div class="col-md-6 col-lg-4">
              <div class="ph-video">
                <iframe width="100%" height="200" src="{{$url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div class="text">
                <p>
                  {{$item->description}} 
                </p>
              </div>
            </div>
           @endforeach
        @endif
         
      </div>
   </div>
</section>
<!-- End Section PH TV-->

<div class="clearfix"></div>

<!-- Section Consultation  -->
<section class="sec-consul">
  <div class="bg-sec">
  </div>
  <div class="part-one">
      <div class="container">
          <div class="row">
              <div class="col">
                  <h1>COME AND SEE US AT PARCH HILL</h1>
                  <p>The process of getting to know you start from the very first time
                    we meet you at your Consultation. This is an opportunity for us to
                    discuss your child’s requirements in depth and to discuss your
                    child’s assessment and comprehensive parent feedback report.</p>
                  <a href="#" type="button" class="btn  btn-lg bg-red">Book Consultation Now </a>
                  <a href="#" type="button" class="btn  btn-lg bg-yellow">Call Now </a>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- End Section Consultation -->
 @endsection
  