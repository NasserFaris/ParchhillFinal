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
                <li>FAQ</li>
              </ul>
            </div>
            <div class="bread-title">
              <h1 aria-current="page">FAQ</h1>
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
  <!-- Section FAQ -->
  <section class="sec-faq">
    <div class="container">
      <div class="part-one">
        <div class="row">
          <div class="col">
            <div class="title">
              <h1>
                You can find answers to the most frequently asked questions here.
              </h1>
            </div>
            <div class="sub-title">
              <h2>
                Choose a category below to jump to the answers you’re looking for.
              </h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="offset-md-1 col-md-10">
            <div class="tabs-list">
              <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link  active" id="online-tuition-tab" data-toggle="pill" href="#online-tuition"
                    role="tab" aria-controls="online-tuition" aria-selected="true">ONLINE TUITON</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link " id="incenter-tach-tab" data-toggle="pill" href="#incenter-tach" role="tab"
                    aria-controls="incenter-tach" aria-selected="false">IN-CENTRE TEACHING</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--  Tabs Content     -->
    <div class="tab-content" id="pills-tabContent">
      <!--  Content On Line TUITON      -->
      <div class="tab-pane fade show active" id="online-tuition" role="tabpanel" aria-labelledby="online-tuition-tab">
        <div class="bg-green">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="heading">
                  <h3>What is 360 Online?</h3>
                  <h3>How does 360 Online work?</h3>
                  <h3>How does 360 Online work?</h3>
                  <br>
                  <h3>My membership</h3>
                  <h3>E-SAFTEY of my child online</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="content">
          <div class="heading">
            <div class="container">
              <div class="row">
                <div class="col">
                  <h1>
                    What is 360 Online?
                  </h1>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">What is 360 Online?</h2>
                  <div class="card-body">
                    <p class="card-text">
                      360 online is an online tutoring platform helping children all around
                      the UK to meet their educational goals from home. Parch Hill offers
                      different packages for you to choose from to meet the individual need
                      of your child.
                    </p>
                    <p class="card-text">
                      Find out more<a href="#"> here.</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">Who can access 360 Online?</h2>
                  <div class="card-body">
                    <p class="card-text">
                      360 online is available to all our members. Not a member yet? No
                      problem books your free assessment by clicking <a href="#"> here.</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">What Subjects does 360 Online cover?</h2>
                  <div class="card-body">
                    <p class="card-text">
                      Parch Hill offers tuition in the two main subjects, English & Maths.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>
            </div>
          </div>
          <div class="heading">
            <div class="container">
              <div class="row">
                <div class="col">
                  <h1>
                    How does 360 Online work?
                  </h1>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">How do I join 360 Online?</h2>
                  <div class="card-body">
                    <p class="card-text">
                      Joining 360 Online is very simple and designed to suit all:
                    </p>
                    <ol class="card-text">
                      <li> Ask your child to complete a <strong>FREE</strong> online assessment.</li>
                      <li>Receive a FREE comprehensive report of your child’s performance.</li>
                      <li> Join a FREE consultation by one of our members.</li>
                      <li> Choose the right package for your child.</li>
                      <li>Become part of 360 Online. </li>
                    </ol>
                    <p class="card-text">
                      Start using 360 online now by clicking <a href="#"> here.</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">What age range is 360 Online suitable for?</h2>
                  <div class="card-body">
                    <p class="card-text">
                      We are specialised to help children from 4-14.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">When does my online package start?</h2>
                  <div class="card-body">
                    <p class="card-text">
                      Your package will start from the 1st of the following month.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">Am I expected to accompany my child
                    during the online live seminars? </h2>
                  <div class="card-body">
                    <p class="card-text">
                      Parents do not need to be present for the duration of the session, but
                      you are welcome to stay if you like. For our younger members, we
                      would recommend someone is nearby in case they need support.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>

            </div>
          </div>
          <div class="heading">
            <div class="container">
              <div class="row">
                <div class="col">
                  <h1>
                    Which Package is suited for my child?
                  </h1>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">Do all 360 online packages follow the national curriculum?</h2>
                  <div class="card-body">
                    <p class="card-text">
                      Yes! Any package you wish to choose for your child at Parch Hill is
                      aligned to the school curriculum. This means everything your child
                      will learn at Parch Hill will help them at school.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">How can I decide which package suits my child the best?</h2>
                  <div class="card-body">
                    <p class="card-text">
                      At Parch Hill we start by assessing your child’s potential by a <strong>FREE</strong>
                      online assessment. After the assessment, we will provide you with
                      a full comprehensive report and a free consultation to discuss how
                      your child is performing academically.
                    </p>
                    <p class="card-text">
                      In this consultation our specialist advisor will go through all the
                      different packages with you in detail and you can come to a decision
                      together about what package suits your child best right now.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">Will I be able to switch my package
                    to a different package if required?</h2>
                  <div class="card-body">
                    <p class="card-text">
                      At Parch Hill, we value our customer satisfaction before anything
                      else. Give us a call and you should be able to switch to any new
                      package of your choice which suits your child now.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">Am I expected to accompany my child
                    during the online live seminars? </h2>
                  <div class="card-body">
                    <p class="card-text">
                      Our specialist advisors can advice you on which package can be
                      suited for your child’s special needs.
                    </p>
                    <p class="card-text">
                      Find out more<a href="#"> here.</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>

            </div>
          </div>
          <div class="heading">
            <div class="container">
              <div class="row">
                <div class="col">
                  <h1>
                    My membership
                  </h1>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">What if my child misses an online seminar?</h2>
                  <div class="card-body">
                    <p class="card-text">
                      If your child misses an online session – not to worry! Your child can
                      access all online classes through Parch Hill e-class. All sessions are
                      recorded and posted every week
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">What is your response time for WhatsApp live support?</h2>
                  <div class="card-body">
                    <p class="card-text">
                      Whenever your child needs help with a question, they can contact us
                      through always available WhatsApp online service. Our tutors aim to
                      have a solution for you within three hours.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">When are the learning booklets delivered each month?</h2>
                  <div class="card-body">
                    <p class="card-text">
                      Your child’s learning booklets will be delivered to your door step
                      every two weeks and cover two weeks’ worth of work.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">How often can I access the other resources? </h2>
                  <div class="card-body">
                    <p class="card-text">
                      You have unlimited access to ONLINE English and Maths practice
                      with our partner. You can also access our worksheets, available in
                      members area.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>

            </div>
          </div>
          <div class="heading">
            <div class="container">
              <div class="row">
                <div class="col">
                  <h1>
                    E-SAFTEY of my child online
                  </h1>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">How do I know my child is safe ONLINE while learning?</h2>
                  <div class="card-body">
                    <p class="card-text">
                      At Parch Hill, Child safety is of utmost importance. We have a
                      full e-safety guidance in place. We will provide you with all of the
                      information you need to keep your child safe on the internet.
                    </p>
                    <p class="card-text">
                      To read our E-saftey Policy, please click <a href="#"> here.</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">How can I access a copy of your company
                    policies and procedures? </h2>
                  <div class="card-body">
                    <p class="card-text">
                      You can download a copy of our company
                    </p>
                    <p class="card-text">
                      Policies and Procedures <a href="#"> here.</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">Is Parch Hill Ofsted registered?</h2>
                  <div class="card-body">
                    <p class="card-text">
                      Yes, Parch Hill is Ofsted registered.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">Where can I find your Ofsted certificate? </h2>
                  <div class="card-body">
                    <p class="card-text">
                      Our certificates can be found displayed in all our centres. If you
                      would like a copy, please contact our team and we can provide you
                      with a digital copy.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
      <!--End Content On Line TUITON    -->

      <!--  Content Inline Center      -->
      <div class="tab-pane fade" id="incenter-tach" role="tabpanel" aria-labelledby="incenter-tach-tab">
        <div class="bg-green">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="heading margin-m">
                  <h3>What is Parch Hill?</h3>
                  <h3>Parch Hill In-Centre Learning</h3>
                  <h3>Centre Locations & Opening Times</h3>
                  <h3>Policies & Procedures</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="content">
          <div class="heading">
            <div class="container">
              <div class="row">
                <div class="col">
                  <h1>
                    What is Parch Hill?
                  </h1>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">What is Parch Hill?</h2>
                  <div class="card-body">
                    <p class="card-text">
                      Parch Hill has been dedicated to helping families in the local area
                      since 2012 by providing affordable maths and English tuition to
                      children aged 516. Find out more about our journey<a href="#"> here.</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">How many centres does Parch Hill have?</h2>
                  <div class="card-body">
                    <p class="card-text">
                      Parch Hill currently has 4 centres, all located in South London
                    </p>
                    <p class="card-text">
                      If you are not located in South London and need support for your
                      child, see if our 360 Online learning can help you.Click
                      <a href="#"> here.</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>
            </div>
          </div>
          <div class="heading">
            <div class="container">
              <div class="row">
                <div class="col">
                  <h1>
                    Parch Hill In- Centre Learning
                  </h1>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">What subjects are taught in Parch Hill Centres</h2>
                  <div class="card-body">
                    <p class="card-text">
                      Parch Hill is specialised in teaching English & Maths in our centres. All
                      teaching is aligned with the UK curriculum. Find out more about our
                      programmes<a href="#"> here.</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">How often does a Parch Hill student go to the
                    centre and for how long?</h2>
                  <div class="card-body">
                    <p class="card-text">
                      Parch Hill students visit the centre once a week for 2 hours. This
                      means 1 hour per subject.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">Can my child come more than once a week?</h2>
                  <div class="card-body">
                    <p class="card-text">
                      We can only offer sessions for students once a week. However our
                      Online Learning Portal is available for students to consolidate their
                      learning 7-days a week
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">Does Parch Hill use computers in centre for learning? </h2>
                  <div class="card-body">
                    <p class="card-text">
                      We believe that computer aided learning can supplement a child’s
                      learning at home and at school. However we use traditional pentopaper learning in our lessons.
                      However, we do provide our Online
                      portal to all members to continue their learning at home.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">What happens if my child misses a lesson?</h2>
                  <div class="card-body">
                    <p class="card-text">
                      If your child misses their lesson, we do our utmost to ensure they
                      don’t miss out on anything! That’s why we offer catch-up lessons and
                      ensure that you have the work emailed to you the next day.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">Do you accept childcare vouchers and pupil premium payment? </h2>
                  <div class="card-body">
                    <p class="card-text">
                      Parch Hill centres accept childcare vouchers and pupil premium
                      payment. Please speak to our centre staff for more information or
                      read more about it <a href="#">here</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>

            </div>
          </div>
          <div class="heading">
            <div class="container">
              <div class="row">
                <div class="col">
                  <h1>
                    Centre Locations & Opening Times
                  </h1>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">Where are Parch Hill Centres located?</h2>
                  <div class="card-body">
                    <p class="card-text">
                      We currently have centres in following locations:
                    </p>
                    <ol class="card-text">
                      <li> Croydon, click for directions </li>
                      <li> Norwood, click for directions</li>
                      <li> Mitcham, click for directions</li>
                      <li> Wallington, click for directions</li>
                    </ol>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">What if there isn’t a centre in my area?</h2>
                  <div class="card-body">
                    <p class="card-text">
                      For students who do not have a Parch Hill centre in their area or
                      who are unable to attend a centre, Parch Hill offers a 360 Online
                      service in which students are able to study from home using our
                      expert material and get help from our experienced teachers.
                      Find out more <a href="#">here.</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">When are you open?</h2>
                  <div class="card-body">
                    <p class="card-text">
                      We are open 7 days a week. Monday - Friday, from 9am - 9pm, and
                      on Saturdays and Sundays we are open from 9am - 6pm. We take a
                      short break over the Christmas period and Easter, but other than that
                      we are open all year round (including school holiday periods!)
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">Can I use public transport to come to the centre?</h2>
                  <div class="card-body">
                    <p class="card-text">
                      All our centres are easily accessible by public transport, bus or train.
                      Find out more <a href="#">here. </a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">Can I come and visit the centre before joining Parch Hill?</h2>
                  <div class="card-body">
                    <p class="card-text">
                      Yes! You are welcome to book a FREE parent consultation with us
                      and see our centres in action at any time that suits you. <a href="#">Book</a> your
                      consultation now.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>
            </div>
          </div>
          <div class="heading">
            <div class="container">
              <div class="row">
                <div class="col">
                  <h1>
                    Policies & Procedures
                  </h1>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">How can I access a copy of your company
                    policies and procedures? </h2>
                  <div class="card-body">
                    <p class="card-text">
                      You can download a copy of our company Policies
                      and Procedures <a href="#">here. </a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">Is Parch Hill Ofsted registered?</h2>
                  <div class="card-body">
                    <p class="card-text">
                      Yes! Parch Hill is Ofsted registered.</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card">
                  <h2 class="card-header">Where can I find your Ofsted certificate?</h2>
                  <div class="card-body">
                    <p class="card-text">
                      Our certificates can be found displayed in all our centres. If you
                      would like a copy, please contact our team and we can provide you a
                      digital copy.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 align-self-center">
                <div class="link">
                  <a href="#" type="button" class="btn  btn-lg bg-green-light">Read Answer</a>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
      <!--End Content Inline Center      -->
    </div>
    <!--End Tabs Content     -->

  </section>
  <!-- End Section FAQ-->

 @endsection
  