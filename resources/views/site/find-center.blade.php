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
                <li>Find a center</li>
              </ul>
            </div>
            <div class="bread-title">
              <h1 aria-current="page">Find a center</h1>
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
<!-- Section Find Center 1 -->
<section class="sec-find-1">
  <div class="container">
      <div class="row">
        <div class="col">
            <div class="part-one">
                <h1>FIND YOUR LOCAL EDUCATION CENTRE </h1>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="offset-md-1 col-md-10 offset-md-1">
            <form>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <label class=""> Please search by postcode or city name </label>
                        <input type="text" class="form-control " placeholder="Post code or city name" value="" required>
                    </div>
                    <div class="col-sm-2 align-self-end">
                        <button class="btn btn-lg bg-red " type="submit">Find</button>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <label class="">Alternatively,</label>
                        <input type="text" class="form-control " placeholder="Use your current location" value="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label> </label>
                        <input type="text" class="form-control " placeholder="New Centres opening soon. View our UK wide Learning Packages " value="" required>
                    </div>
                </div>
            </form>
              
        </div>
    </div>
  </div>  
  <div class="part-two">
      <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>All PH centre locations</h1>
                <a href="#" type="button" class="btn  btn-lg bg-red">View All </a>
            </div>
        </div>
      </div>
  </div>
</section>
<!-- End Section Find Center 1-->
<div class="clearfix"></div>
<!-- Section Find Center 2 -->
<section class="sec-find-2">
    <div class="bg-sec">
    </div>
    <div class="part-one">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>CROYDON</h1>
                    <p>Address: Archbishop Lanfranc Academy, Mitcham Road, Croydon CR9 3AS </p>
                    <a href="#" type="button" class="btn  btn-lg bg-white">Click for directions </a>
                    <a href="#" type="button" class="btn  btn-lg bg-red">Book Now </a>
                    <a href="#" type="button" class="btn  btn-lg bg-yellow">Call Now </a>
                </div>
            </div>
        </div>
    </div>
    <div class="part-two">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>CROYDON</h1>
                    <p>Address: Archbishop Lanfranc Academy, Mitcham Road, Croydon CR9 3AS </p>
                    <a href="#" type="button" class="btn  btn-lg bg-white">Click for directions </a>
                    <a href="#" type="button" class="btn  btn-lg bg-red">Book Now </a>
                    <a href="#" type="button" class="btn  btn-lg bg-yellow">Call Now </a>
                </div>
            </div>
        </div>
    </div>
    <div class="part-one">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>CROYDON</h1>
                    <p>Address: Archbishop Lanfranc Academy, Mitcham Road, Croydon CR9 3AS </p>
                    <a href="#" type="button" class="btn  btn-lg bg-white">Click for directions </a>
                    <a href="#" type="button" class="btn  btn-lg bg-red">Book Now </a>
                    <a href="#" type="button" class="btn  btn-lg bg-yellow">Call Now </a>
                </div>
            </div>
        </div>
    </div>
    <div class="part-two">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>CROYDON</h1>
                    <p>Address: Archbishop Lanfranc Academy, Mitcham Road, Croydon CR9 3AS </p>
                    <a href="#" type="button" class="btn  btn-lg bg-white">Click for directions </a>
                    <a href="#" type="button" class="btn  btn-lg bg-red">Book Now </a>
                    <a href="#" type="button" class="btn  btn-lg bg-yellow">Call Now </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section Find Center 2-->
<div class="clearfix"></div>

  @endsection
  