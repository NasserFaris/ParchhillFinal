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
                <li>360 Online Learning</li>
              </ul>
            </div>
            <div class="bread-title">
              <h1 aria-current="page">360 Online Learning</h1>
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

<!-- Section Online Banner -->
<section class="online-banner">
    <div class="container-fluid ">
      <div class="row align-items-center">
        <div class="col-md-12 banner wow fadeIn ">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="banner-heading">
                  <h1>
                    A FULL 360 APPROACH TO YOUR CHILD’S LEARNING
                  </h1>
                </div>
                <div class="banner-dsc">
                  <p>From the delivery of learning
                    booklets to your door, to ‘Live’
                    sessions, 24/7 Live support, monthly
                    newsletters, parent advice, ‘surprise’
                    rewards and much more.</p>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- End Section Oline Banner-->
  <div class="clearfix"></div>
  <!-- Section Select Plan -->
  <section class="sec-plan">
    <div class="part-one">
      <div class="title">
        <div class="container">
          <div class="row">
            <div class="col">
              <h1>SELECT YOUR PLAN</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="sub-title">
        <div class="container">
          <div class="row">
            <div class="col">
              <h1>14 Day Risk-Free Money Back Guarantee for all Parents</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="part-two">
      <div class="title">
        <div class="container">
          <div class="row">
            <div class="col">
              <h1>50% OFF</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="sub-title">
        <div class="container">
          <div class="row">
            <div class="col">
              <h1>IF YOU JOIN IN APRIL AND MAY 2020</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-5 part-thr">
          <div class="card bg-gray-light full-height">
            <div class="card-body ">
              <h3 class="card-title">SERVICES</h3>
              <span class="icon-arrow_downward animated trans-mobile"></span>
            </div>

          </div>
        </div>
        <div class="col-sm part-thr ">
          <div class="card ">
            <div class="card-body">
              <h3 class="card-title bg-x-light">ESSENTIALS</h3>
              <div class="card-text bg-x-light">
                <p>Outreach
                  Learning Package
                </p>
                <ul>
                  <li>Was <span class="Disc">£60.00</span> </li>
                  <li>Now only</li>
                  <li class="price">£29.99</li>
                  <li>a month</li>
                </ul>
              </div>
            </div>
          </div>
          <a href="#" type="button" class="btn  btn-lg bg-red">Buy Now</a>
        </div>
        <div class="col-sm part-thr ">
          <div class="card ">
            <div class="card-body">
              <h3 class="card-title bg-m-light">ADVANCED</h3>
              <div class="card-text bg-m-light">
                <p>Plus
                  Learning Package
                </p>
                <ul>
                  <li>Was <span class="Disc">£60.00</span> </li>
                  <li>Now only</li>
                  <li class="price">£29.99</li>
                  <li>a month</li>
                </ul>
              </div>
            </div>
          </div>
          <a href="#" type="button" class="btn  btn-lg bg-red">Buy Now</a>
        </div>
        <div class="col-sm part-thr">
          <div class="card ">
            <div class="card-body">
              <h3 class="card-title bg-green-light">COMPLETE</h3>
              <div class="card-text bg-green-light">
                <p>360 Live Tuition
                  Learning Package</p>
                <ul>
                  <li>Was <span class="Disc">£60.00</span> </li>
                  <li>Now only</li>
                  <li class="price">£29.99</li>
                  <li>a month</li>
                </ul>
              </div>
            </div>
          </div>
          <a href="#" type="button" class="btn  btn-lg bg-red">Buy Now</a>
        </div>
      </div>
      <div class="row ">
        <div class="col-md-12">
          <table class="table table-borderless">
            <thead>
              <tr>
                <th class="row-1 name"></th>
                <th class="row-2 detail-1"></th>
                <th class="row-3 detail-1"></th>
                <th class="row-4 detail-1"></th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <th scope="row" class="bg-gray-light">INITIAL ASSESSMENT <a href="#"
                    class="float-right icon-info_outline"></a></th>
                <td class="bg-x-light"><img src="assets/images/icons/check.png" alt="check"></td>
                <td class="bg-m-light"><img src="assets/images/icons/check.png" alt="check"></td>
                <td class="bg-green-light"><img src="assets/images/icons/check.png" alt="check"></td>
              </tr>
              <tr>
                <th scope="row" class="bg-gray-light">COMPREHENSIVE FEEDBACK REPORT <a href="#"
                    class="float-right icon-info_outline"></a></th>
                <td class="bg-x-light"><img src="assets/images/icons/check.png" alt="check"></td>
                <td class="bg-m-light"><img src="assets/images/icons/check.png" alt="check"></td>
                <td class="bg-green-light"><img src="assets/images/icons/check.png" alt="check"></td>
              </tr>
              <tr>
                <th scope="row" class="bg-gray-light">STUDY PLAN<a href="#" class="float-right icon-info_outline"></a>
                </th>
                <td class="bg-x-light"><img src="assets/images/icons/check.png" alt="check"></td>
                <td class="bg-m-light"><img src="assets/images/icons/check.png" alt="check"></td>
                <td class="bg-green-light"><img src="assets/images/icons/check.png" alt="check"></td>
              </tr>
              <tr>
                <th scope="row" class="bg-gray-light">LEARNING BOOKLETS TO YOUR DOOR<a href="#"
                    class="float-right icon-info_outline"></a></th>
                <td class="bg-x-light"><img src="assets/images/icons/check.png" alt="check"></td>
                <td class="bg-m-light"><img src="assets/images/icons/check.png" alt="check"></td>
                <td class="bg-green-light"><img src="assets/images/icons/check.png" alt="check"></td>
              </tr>
              <tr>
                <th scope="row" class="bg-gray-light">MARK SCHEMES TO YOUR DOOR<a href="#"
                    class="float-right icon-info_outline"></a></th>
                <td class="bg-x-light"><img src="assets/images/icons/check.png" alt="check"></td>
                <td class="bg-m-light"><img src="assets/images/icons/check.png" alt="check"></td>
                <td class="bg-green-light"><img src="assets/images/icons/check.png" alt="check"></td>
              </tr>
              <tr>
                <th scope="row" class="bg-gray-light">PARENT COUNSELLING & MENTORING WEEKLY<a href="#"
                    class="float-right icon-info_outline"></a></th>
                <td class="bg-x-light"><img src="assets/images/icons/check.png" alt="check"></td>
                <td class="bg-m-light"><img src="assets/images/icons/check.png" alt="check"></td>
                <td class="bg-green-light"><img src="assets/images/icons/check.png" alt="check"></td>
              </tr>
              <tr>
                <th scope="row" class="bg-gray-light">PARCH HILL NEWSLETTER<a href="#"
                    class="float-right icon-info_outline"></a></th>
                <td class="bg-x-light"><img src="assets/images/icons/check.png" alt="check"></td>
                <td class="bg-m-light"><img src="assets/images/icons/check.png" alt="check"></td>
                <td class="bg-green-light"><img src="assets/images/icons/check.png" alt="check"></td>
              </tr>
              <tr>
                <th scope="row" class="bg-gray-light">‘UNLIMITED’ ONLINE PRACTICE<a href="#"
                    class="float-right icon-info_outline"></a></th>
                <td class="bg-x-light"><img src="assets/images/icons/check.png" class="d-none" alt="check"></td>
                <td class="bg-m-light"><img src="assets/images/icons/check.png" alt="check"></td>
                <td class="bg-green-light"><img src="assets/images/icons/check.png" alt="check"></td>
              </tr>
              <tr>
                <th scope="row" class="bg-gray-light">‘LIVE’ SUPPORT – 7 DAYS A WEEK<a href="#"
                    class="float-right icon-info_outline"></a></th>
                <td class="bg-x-light"><img src="assets/images/icons/check.png" class="d-none" alt="check"></td>
                <td class="bg-m-light"><img src="assets/images/icons/check.png" alt="check"></td>
                <td class="bg-green-light"><img src="assets/images/icons/check.png" alt="check"></td>
              </tr>
              <tr>
                <th scope="row" class="bg-gray-light">STUDY SKILL SESSIONS<a href="#"
                    class="float-right icon-info_outline"></a></th>
                <td class="bg-x-light"><img src="assets/images/icons/check.png" class="d-none" alt="check"></td>
                <td class="bg-m-light"><img src="assets/images/icons/check.png" alt="check"></td>
                <td class="bg-green-light"><img src="assets/images/icons/check.png" alt="check"></td>
              </tr>
              <tr>
                <th scope="row" class="bg-gray-light">INSPIRE SKILLS SESSIONS<a href="#"
                    class="float-right icon-info_outline"></a></th>
                <td class="bg-x-light"><img src="assets/images/icons/check.png" class="d-none" alt="check"></td>
                <td class="bg-m-light"><img src="assets/images/icons/check.png" alt="check"></td>
                <td class="bg-green-light"><img src="assets/images/icons/check.png" alt="check"></td>
              </tr>
              <tr>
                <th scope="row" class="bg-gray-light">LIVE TUITION SESSIONS WITH TUTOR <a href="#"
                    class="float-right icon-info_outline"></a></th>
                <td class="bg-x-light"><img src="assets/images/icons/check.png" class="d-none" alt="check"></td>
                <td class="bg-m-light"><img src="assets/images/icons/check.png" class="d-none" alt="check"></td>
                <td class="bg-green-light"><img src="assets/images/icons/check.png" alt="check"></td>
              </tr>
              <tr>
                <th scope="row" class="bg-gray-light">RECORDED SESSIONS<a href="#"
                    class="float-right icon-info_outline"></a></th>
                <td class="bg-x-light"><img src="assets/images/icons/check.png" class="d-none" alt="check"></td>
                <td class="bg-m-light"><img src="assets/images/icons/check.png" class="d-none" alt="check"></td>
                <td class="bg-green-light"><img src="assets/images/icons/check.png" alt="check"></td>
              </tr>
              <tr>
                <th scope="row" class="bg-gray-light">FEEDBACK CALLS<a href="#"
                    class="float-right icon-info_outline"></a></th>
                <td class="bg-x-light"><img src="assets/images/icons/check.png" class="d-none" alt="check"></td>
                <td class="bg-m-light"><img src="assets/images/icons/check.png" class="d-none" alt="check"></td>
                <td class="bg-green-light"><img src="assets/images/icons/check.png" alt="check"></td>
              </tr>
              <tr>
                <th scope="row" class="bg-gray-light">REWARDS & INCENTIVES FOR YOUR CHILD<a href="#"
                    class="float-right icon-info_outline"></a></th>
                <td class="bg-x-light"><img src="assets/images/icons/check.png" class="d-none" alt="check"></td>
                <td class="bg-m-light"><img src="assets/images/icons/check.png" class="d-none" alt="check"></td>
                <td class="bg-green-light"><img src="assets/images/icons/check.png" alt="check"></td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th scope="row"></th>
                <td class="text-center detail-1"> <a href="#" type="button" class="btn  btn-lg bg-yellow">See More</a>
                </td>
                <td class="text-center detail-2"> <a href="#" type="button" class="btn  btn-lg bg-yellow">See More</a>
                </td>
                <td class="text-center detail-3"> <a href="#" type="button" class="btn  btn-lg bg-yellow">See More</a>
                </td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section Select Plan-->
  <div class="clearfix"></div>
  <!-- Section Essentials  Plan -->
  <section class="sec-essen-plan">
    <div class="title">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1>Your <strong>ESSENTIALS</strong> Plan Includes</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="content bg-x-light">
      <div class="container">
        <div class="bg-white">
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="icon">
                <img src="assets/images/icons/essen-2.png" alt="icon-1">
              </div>
              <div class="title">
                <h3>INITIAL ASSESSMENT</h3>
              </div>
              <div class="dsc">
                <p>This free assessment will identify
                  your child’s current education level
                  for MATHS & ENGLISH aligned
                  with UK’s National Curriculum.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="icon">
                <img src="assets/images/icons/essen-1.png" alt="icon-1">
              </div>
              <div class="title">
                <h3>COMPREHENSIVE
                  FEEDBACK REPORT</h3>
              </div>
              <div class="dsc">
                <p>Easy to understand report for you
                  and your child, highlighting areas
                  they have performed well in and
                  those they can improve on.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="icon">
                <img src="assets/images/icons/essen-3.png" alt="icon-1">
              </div>
              <div class="title">
                <h3>STUDY PLAN</h3>
              </div>
              <div class="dsc">
                <p>Information from the assessment
                  and feedback report will be used to
                  create a personalised study plan
                  your child</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="icon">
                <img src="assets/images/icons/essen-4.png" alt="icon-1">
              </div>
              <div class="title">
                <h3>LEARNING BOOKLETS
                  WITH MARK SCHEMES </h3>
              </div>
              <div class="dsc">
                <p>Hard copies of Maths and English
                  learning booklets delivered to your
                  home alongside, mark schemes for
                  learning booklets, allowing you to
                  mark alongside your child.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="icon">
                <img src="assets/images/icons/essen-5.png" alt="icon-1" style="width: 100px;">
              </div>
              <div class="title">
                <h3>COUNSELLING &
                  MENTORING</h3>
              </div>
              <div class="dsc">
                <p>An ongoing support
                  forum for all parents.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="icon">
                <img src="assets/images/icons/essen-6.png" alt="icon-1">
              </div>
              <div class="title">
                <h3>PARCH HILL
                  NEWSLETTER</h3>
              </div>
              <div class="dsc">
                <p>Our monthly newsletter delivered
                  to your home - providing you with
                  all the relevant information about
                  education and Parch Hill activity.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section Advanced  Plan -->
  <div class="clearfix"></div>
  <!-- Section Advanced  Plan -->
  <section class="sec-adv-plan">
    <div class="title">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1>Your <strong>ADVANCED</strong> Plan Includes everything in ESSENTIAL and…</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="content bg-m-light">
      <div class="container">
        <div class="bg-white">
          <div class="row">
            <div class="col-md-6 offset-lg-1 col-lg-4 offset-lg-1">
              <div class="icon">
                <img src="assets/images/icons/advnce-1.png" alt="icon-1" style="width: 100px;">
              </div>
              <div class="title">
                <h3>UNLIMITED’ ONLINE
                  PRACTISE</h3>
              </div>
              <div class="dsc">
                <p>Unlimited ONLINE Maths, English
                  and Science and 11 Plus practice
                  and revision.</p>
              </div>
            </div>
            <div class="col-md-6 offset-lg-1 col-lg-4 offset-lg-1">
              <div class="icon">
                <img src="assets/images/icons/advnce-2.png" alt="icon-1">
              </div>
              <div class="title">
                <h3>‘LIVE’ WhatsApp SUPPORT – 24/7</h3>
              </div>
              <div class="dsc">
                <p>WhatsApp CONSTANT support-daily
                  messages on WhatsApp for KS1, KS2, KS3
                  and KS4. Children can access support from
                  a portal of tutors via WhatsApp MondaySaturday 9am-9pm.</p>
              </div>
            </div>
            <div class="col-md-6 offset-lg-1 col-lg-4 offset-lg-1">
              <div class="icon">
                <img src="assets/images/icons/advnce-3.png" alt="icon-1">
              </div>
              <div class="title">
                <h3>STUDY SKILL SESSIONS </h3>
              </div>
              <div class="dsc">
                <p>Access study skills experts live, to learn, acquire
                  important transferable life skills presented by brilliant,
                  vibrant and relatable presenters. Students will leave
                  with valuable skills that they can use to make a real
                  difference to their performance.</p>
              </div>
            </div>
            <div class="col-md-6 offset-lg-1 col-lg-4 offset-lg-1">
              <div class="icon">
                <img src="assets/images/icons/advnce-4.png" alt="icon-1">
              </div>
              <div class="title">
                <h3>INSPIRE SKILLS SESSIONS </h3>
              </div>
              <div class="dsc">
                <p>Access ‘Inspire’ sessions live, helping to
                  keep students motivated. They will hear from
                  inspirational and successful people from their
                  chosen career. Essential help when increasing
                  your child’s vision and aspirations.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section Essentials  Plan -->
  <div class="clearfix"></div>
  <!-- Section Comeplete Plan -->
  <section class="sec-cmplt-plan">
    <div class="title">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1>Your <strong>COMPLETE</strong> Plan Includes everything in ADVANCED and…</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="content bg-green-light">
      <div class="container">
        <div class="bg-white">
          <div class="row">
            <div class="col-md-6 offset-lg-1 col-lg-4 offset-lg-1">
              <div class="icon">
                <img src="assets/images/icons/cmplt-1.png" alt="icon-1">
              </div>
              <div class="title">
                <h3>LIVE TUITION SESSIONS</h3>
              </div>
              <div class="dsc">
                <p>
                  Live online English and Maths tuition sessions.
                  A tutor will teach your child and allow you to
                  accompany them in this learning, every week. The
                  tutor will go through the questions and answers.
                  All sessions will be fully recorded for your child,
                  allowing full access throughout the week</p>
              </div>
            </div>
            <div class="col-md-6 offset-lg-1 col-lg-4 offset-lg-1">
              <div class="icon">
                <img src="assets/images/icons/cmplt-2.png" alt="icon-1">
              </div>
              <div class="title">
                <h3>RECORDED SESSIONS</h3>
              </div>
              <div class="dsc">
                <p>Recorded sessions for replay.
                  You and your child can view this
                  anytime, as many times you like.</p>
              </div>
            </div>
            <div class="col-md-6 offset-lg-1 col-lg-4 offset-lg-1">
              <div class="icon">
                <img src="assets/images/icons/cmplt-3.png" alt="icon-1" style="width: 100px;">
              </div>
              <div class="title">
                <h3>FEEDBACK CALLS </h3>
              </div>
              <div class="dsc">
                <p>Individual personalised feedback in
                  accordance with the initial study plan
                  and online learning will always keep
                  you updated.</p>
              </div>
            </div>
            <div class="col-md-6 offset-lg-1 col-lg-4 offset-lg-1">
              <div class="icon">
                <img src="assets/images/icons/cmplt-4.png" alt="icon-1">
              </div>
              <div class="title">
                <h3>REWARDS & INCENTIVES
                  FOR YOUR CHILD</h3>
              </div>
              <div class="dsc">
                <p>Parch Hill believes in rewarding your
                  child’s hard work each step of the way and
                  keeping them motivated.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section Comeplete  Plan -->
  <div class="clearfix"></div>
  <!-- Section Find More -->
  <section class="sec-find-more">
    <div class="heading">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1>WANT TO FIND OUT MORE?</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="link">
      <div class="container">
        <div class="row">
          <div class="col">
            <a href="#" type="button" class="btn  btn-lg bg-red">Call Back</a>
            <a href="#" type="button" class="btn  btn-lg bg-red">FAQ</a>
            <a href="#" type="button" class="btn  btn-lg bg-red">Get in Touch</a>
          </div>
        </div>
      </div>
    </div>
    <div class="sec-img">

    </div>
    <div class="ask-qus">
      <div class="heading">
        <h1>ONLINE 360 LEARNING - FREEQUENTLY ASKED QUESTIONS</h1>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="content">
              <h3>What if I already have a plan in
                place with PARCH HILL?</h3>
            </div>
          </div>
          <div class="col-md-6">
            <div class="content">
              <h3>When does my package start? </h3>
            </div>
          </div>
          <div class="col-md-6">
            <div class="content">
              <h3>What is your response time for
                WhatsApp live support?</h3>
            </div>
          </div>
          <div class="col-md-6">
            <div class="content">
              <h3>When are the learning booklets
                delivered each month?</h3>
            </div>
          </div>
          <div class="col-md-6">
            <div class="content">
              <h3>What if my child misses an
                online seminar?</h3>
            </div>
          </div>
          <div class="col-md-6">
            <div class="content">
              <h3>How do I know my child is safe
                ONLINE while learning?</h3>
            </div>
          </div>
          <div class="col-md-6">
            <div class="content">
              <h3>How do I learn how to use the
                e-class live software?</h3>
            </div>
          </div>
          <div class="col-md-6">
            <div class="content">
              <h3>How do I know my child is safe
                ONLINE while learning?</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="btm-heading">
        <h1>STILL HAVE MORE QUESTIONS?</h1>
      </div>
      <div class="link">
        <a href="#" type="button" class="btn  btn-lg bg-red">Book Consultation Now</a>
      </div>
    </div>
  </section>
  <!-- End Section Find More -->
@endsection  