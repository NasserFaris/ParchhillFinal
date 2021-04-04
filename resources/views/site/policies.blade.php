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
                                <li>Policies</li>
                            </ul>
                        </div>
                      <div class="bread-title">
                        <h1>Policies</h1>
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


<!-- Section Policies -->
<section class="policies">
  <div class="container">
      <div class="row">
          <div class="offset-md-1 col-md-10">
              <div class="heading">
                  <h1>CHILD PROTECTION AND SAFEGUARDING</h1>
              </div>
              <div class="dsc">
                  <p>
                      At Parch Hill we believe all children have an absolute right to a childhood free from
                      abuse, neglect or exploitation. All adults involved in our activities have a duty of care
                      to safeguard and promote the welfare of the children we work with.
                  </p>
                  <p>
                      We work closely with parents and schools to ensure our programmes are delivered
                      safely. All staff and volunteers receive training in safeguarding and child protection
                      before being allocated to a Parch Hill Centre, Online or our partner school. This
                      includes understanding why safeguarding matters, being able to identify different types
                      of abuse, becoming familiar with Parch Hill’s code of conduct and knowing how to
                      respond to a suspicion or allegation.
                  </p>
              </div>
          </div>
          <div class="offset-md-1 col-md-10">
              <div class="heading">
                  <h1>POLICIES AND INFORMATION</h1>
              </div>
              <div class="dsc">
                  <p>
                      Here you will find a copy of our Safeguarding and Child Protection policy:
                      <span>  Parch Hill Safeguarding Policy</span>
                  </p>
                  <p>
                      Here you will find a copy of our Safeguarding and Child Protection leaflet,
                      given to all tutor and mentor volunteers at their initial training:
                      <span>Parch Hill Safeguarding Leaflet</span>
                  </p>
                  <p>
                      Any questions or concerns about safeguarding can be directed to Parch Hill’s
                      safeguarding officer, Hasan Ali via:
                      <a href="#"> hello@parchhill.org.uk </a>
                  </p>
                  <p>
                      Alternatively you can call the office and ask to speak to them on: 0203 092 3093.
                  </p>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col d-flex align-items-center justify-content-center">
              <div class="link">
                  <a href="#" class="btn btn-lg bg-yellow "> Parch Hill
                  E-Safety Policy
                  </a>
                      <a href="#" class="btn btn-lg bg-yellow">Complaints
                          Policy
                      </a>
              </div>

          </div>
          <div class="offset-md-1 col-md-10 d-flex align-items-center justify-content-center">
              <div class="link">
                  <a href="#" class="btn btn-lg bg-red text-white">View other Parch Hill Policies
                  </a>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- End Section Policies-->

 @endsection
  