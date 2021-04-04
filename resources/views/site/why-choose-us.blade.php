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
                <li>Why Choose Us</li>
              </ul>
            </div>
            <div class="bread-title">
              <h1 aria-current="page">Why Choose Us</h1>
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
<!-- Section Why Choose Us? Banner-->
<section class="choose-us-banner">
    <div class="container-fluid ">
        <div class="row ">
          <div class="col-md-12 banner wow fadeIn">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-8">
                  <div class="banner-dsc">
                      <p>At Parch Hill, we believe in maintaining strong
                        and ongoing communication with both parent
                        and child. Our relationship with yourselves and
                        your child’s school underpins our work and is
                        represented in the Parch Hill pyramid. We work
                        with you to develop a bespoke programme
                        of learning that addresses your child’s needs,
                        building up their confidence in essential Maths
                        and English skills to maximise true potential.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
        </div>
  
      </div>
</section>
<!-- End Section Why Choose Us? Banner-->
<div class="clearfix"></div>

<!-- Section  Info -->
<section class="sec-info">
    <div class="bg-green">
        <div class="container-fluid">
            <div class="part-one">
                <div class="row">
                    <div class=" col-lg-5">
                        <ul class="list-trian">
                            <li class="d-block" style="max-width: 190px; margin: 8px auto;"><p>PARENT</p> </li>
                            <li><p>PARCH  HILL</p></li>
                            <li class="bg-yellow" style="clip-path: polygon(50% 100%, 0 0, 100% 0);-webkit-clip-path: polygon(50% 100%, 0 0, 100% 0);"><p style="bottom: 70px;color: #0b4c41;">CHILD</p></li>
                            <li><p>SCHOOL</p></li>
                        </ul>
                    </div>
                    <div class="col-lg-7 align-self-center">
                        <ul class="list-info">
                                <li>Helped 400 + children with KS1 and KS2 SATs Exams.</li>
                                <li>Prepared 150 + children with 11 Plus Entrance Exams.</li>
                                <li>Supported 300 + children with GCSE examinations in
                                    English and Maths.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="part-two">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>
                        So far we have supported over 3,000 + 5 – 16 year
                        old children and their parents aspire higher.
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="part-thr">
        <div class="container">
            <div class="title">
                <h1 class="title">Our name was derived with</h1>
            </div>
        </div>
        <div class="bg-sec">
            <div class="container">
                <div class="row"> 
                    <div class="col">
                        <h1>PURPOSE and has a SOUL.</h1>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Section  Info-->
<div class="clearfix"></div>

<!-- Section Story --> 
<section class="sec-story">
    <div class="part-one">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="heading">
                        <h1>The Parch Hill Story</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="dsc">
                <p>
                    Parch Hill has been dedicated to helping families across the UK from 2013. We deliver
                    maths and English tuition to children aged 5-16, the very foundation of their education.
                    Launchedas a response to bridging the education gap, Parch Hill believes that all children
                    can achieve their maximum potential with the appropriate guidance, preparation and
                    mentoring; regardless of their background or circumstances.  
                </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="history">
                    <ul>
                        <li>
                            <p class="year"><span>2013</span></p>
                            <p class="arrow"><span>single room</span></p>
                        </li>
                        <li>
                            <p class="year"><span>2015</span></p>
                            <p class="arrow"><span>1 center</span></p>
                        </li>
                        <li>
                            <p class="year"><span>2019</span></p>
                            <p class="arrow"><span>3 center</span></p>
                        </li>
                        <li>
                            <p class="year"><span>2020</span></p>
                            <p class="arrow">
                                <span style="bottom: 22px;">
                                    4 center
                                    360 Online
                                    Homes chooling
                                    FREE TUITION
                                </span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="story-flow ">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2  col-lg-2 ">
                    <div class="tringle-left">
                        <p>Unique
                        Curriculum</p>
                    </div>
                </div>
                <div class="offset-lg-1  col-lg-2 offset-lg-1 ">
                    <div class="tringle-top">
                        <p>Communi
                        cation</p>
                    </div>
                    <div class="heading">
                        <h1>Our <br> Approach</h1>
                    </div>
                    <div class="tringle-btm">
                        <p>Small
                        Group
                        Sizes</p>
                    </div>
                </div>
                <div class=" col-lg-2">
                        <div class="tringle-right">
                            <p>Energetic
                            Teachers</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section Story --> 
<div class="clearfix"></div>

<!-- Section Our Founder --> 
<section class="sec-our-founder">
    <div class="bg-green">
        <div class="bg-white">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="part-one">
                            <h1>MEET <br>
                                OUR <br>
                                <span style="font-size: 30px;">FOUNDER</span>  
                            </h1>
                            <img src="assets/images/hassan-ali.png" alt="hassan-ali" class="img-fluid" />
                            <p>
                                Hasan Ali

                            </p>
                            <div class="dsc">
                                <p>
                                    I founded Parch Hill because of my childhood educational experiences. Being a Free
                                    School Meal Pupil (FSM) myself, I faced many challenges at school yet managed to
                                    achieve fantastic GCSE grades. Not having the same opportunities as other children
                                    presented the single biggest challenge for me. My parents simply couldn’t afford the
                                    same educational & financial support that other children received. Struggling to teach
                                    me themselves, they had to save hard to give me the same opportunities as others
                                    and it was surely not easy for them. It was this journey that led me to my mission, to
                                    reduce the widening education ‘gap’. From a very young age, I believed in making the
                                    same educational opportunities available to all kids around the globe. 
                                </p>
                            </div>
                            <ol>
                                <p>
                                    I knew, I needed two things to make my dream come true
                                </p>
                                <li>
                                    <p> <span class="text-green-light">Support,</span>  from my family and loved ones </p>
                                </li>
                                <li>
                                    <p> <span class="text-yellow">Hard work</span> and <span class="text-green-light">determination</span></p>
                                </li>
                                <p class="text">Here at Parch Hill, these two make the foundation of our approach to education.</p>
                            </ol>
                            <div class="btm-heading">
                                <h1>
                                    Now, I am on a mission for Year 2020
                                    ‘EDUCATION FOR ALL’ to help 1 million +
                                    children on Free School Meals with
                                    FREE tuition and mentorship.
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section Our Founder --> 
<div class="clearfix"></div>

<!-- Section Team --> 
<section class="sec-team">
    <div class="part-one">
        <div class="heading">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1>OUR DEDICATED TEAM</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="sub-haeding">
                        <h2>Our TEAM is split into two groups – <span class="text-green-light">Authors, Centre Managers</span> and <span class="text-yellow">Tutors.</span> </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 d-flex align-self-stretch">
                    <div class="dsc">
                        <p>
                            Our authors work for leading
                            examination boards across
                            the world.
                            They are responsible for ensuring
                            our content follows the current
                            curriculum and is up to date.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch">
                    <div class="dsc">
                       <p>
                        Our authors work for leading
                        examination boards across
                        the world.
                        They are responsible for ensuring
                        our content follows the current
                        curriculum and is up to date.
                       </p>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch">
                    <div class="dsc bg-yellow">
                         <p>
                            The tutors are a group
                            of highly experienced
                            teachers. They are keen to
                            teach and always ready to
                            provide support to children
                            and parents
                         </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="part-two">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title">
                        <h3>Some of our team members…</h3>
                    </div>    
                </div>
            </div>
            <div class="row team-content no-gutters">
         
                <div class="col">
                    <div class="team-member">
                        <div class="member">
                            <img src="assets/images/team/DAVID_B&W.jpg" alt="David" >
                            <p>
                                David,
                                Community
                                Awareness
                                Manager 
                            </p>
                        </div>
                        <div class="info">
                            <p>
                                David graduated with a degree in
                                Humanities. He was Head of European
                                Development at The Basic Skills Agency.
                                Alongside, managing the education at
                                3 London prisons as Head of Education.
                                He was also SPM at Young Enterprise
                                and now plays a key role in Parch Hill’s
                                strategy as Community Awareness
                                Manager. David is also Centre Director
                                of Wallington Branch
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="team-member">
                        <div class="member">
                            <img src="assets/images/team/Subaskar_B&W.jpg" alt="Subaskar" >
                            <p>
                                Subaskar,
                                Centre
                                Manager r 
                            </p>
                        </div>
                        <div class="info">
                            <p>
                                Subaskar attended Wallington County Grammar School graduating in Mathematics with Statistics at Queen Mary University. Subaskar has taught in multiple schools including Elmwood Junior School. Having specialised in education for 8 years. Subaskar is also the Centre Director of Parch Hill Mitcham Branch.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="team-member">
                        <div class="member">
                            <img src="assets/images/team/Penge_B&W.jpg" alt="Penge" >
                            <p>
                                Penge,
                                Cambridge
                                Trainer
                            </p>
                        </div>
                        <div class="info">
                            <p>
                                Penge graduated in English from
                                University of Cambridge. He is a CELTA
                                Qualified teacher and 10 years teaching
                                experience. Penge has worked at
                                multiple educational establishments.
                                He is a strong ambassador of ending
                                society-wide inequality affecting
                                education system in the UK and beyond.
                                Watch Penge speaking on our campaign
                                www.launchgood.com/parchhill 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col d-flex align-self-stretch">
                    <div class="team-member">
                        <div class="member">
                            <img src="assets/images/team/Beenish_B&W.jpg" alt="Beenish" >
                            <p>
                                Beenish,
                                Mental Health
                                Ambassador
                            </p>
                        </div>
                        <div class="info">
                            <p>
                                Beenish will graduate as a qualified
                                MBBS Doctor next month! She is our
                                Education Research Analyst and
                                champions our mental health at
                                Parch Hill. She has tutored for 7 years
                                in medicine, Maths, English, Sciences
                                and a Study Skills Expert. She will
                                give regular mental health and
                                study skills tips through various PH
                                communication platforms.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col d-flex align-self-stretch">
                    <div class="team-member">
                        <div class="member">
                            <img src="assets/images/team/Tanae_B&W.jpg" alt="Tanae" >
                            <p>
                                Tanae,
                                Super
                                Mentor
                            </p>
                        </div>
                        <div class="info">
                            <p>
                                A former student of Parch Hill for
                                more than 7 years, starting in Year 5.
                                Awarded a scholarship at a private
                                school; Old Palace in Croydon and
                                achieved all 8s and 9s. She now
                                attends Tiffin School and hopes
                                to study Actuarial Mathematics
                                at LSE. She plays a key role in PH’s
                                Innovative Education Strategy.
                            </p>
                        </div>
                    </div>
                </div>
           
            </div>
        </div>           
    </div>
    <div class="part-thr">
        <div class="container">
            <div class="row heading">
                <div class="col">
                    <h1>
                        BECOME PART OF SOMETHING GREAT TODAY – <br>
                        JOIN OUR TEAM AS AN AUTHOR, CENTRE MANAGER OR A TUTOR NOW
                    </h1>
                    
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="#" type="button" class="btn  btn-lg bg-red">Join Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section Team --> 
<div class="clearfix"></div>

<!-- Section Testimonial --> 
<section class="sec-testimonial">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-5">
                    <div class="parent">
                        <div class="title">
                            <h1>What Our Parents Say...</h1>
                        </div>
                        <div class="arrow-right">
                            <ul>
                                <li>
                                    <p class="text">“My child enjoys their time at Parch Hill”</p>
                                    <p class="number">96%</p>
                                </li>
                                <li>
                                    <p class="text">“My child enjoys their time at Parch Hill”</p>
                                    <p class="number">96%</p>
                                </li>
                                <li>
                                    <p class="text">“My child enjoys their time at Parch Hill”</p>
                                    <p class="number">96%</p>
                                </li>
                                <li>
                                    <p class="text">“My child enjoys their time at Parch Hill”</p>
                                    <p class="number">96%</p>
                                </li>
                                <li>
                                    <p class="text">“My child enjoys their time at Parch Hill”</p>
                                    <p class="number">96%</p>
                                </li>
                            </ul>
                        </div>
                  
                    </div>
                </div>
                <div class="d-none d-lg-block col-md-2 col-lg-2">
                    <div class="line"> 

                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="member">
                        <div class="title">
                            <h1>What Our Members Say...</h1>
                        </div>
                        <div class="arrow-left">
                            <ul>
                                <li>
                                    <p class="text">“My child enjoys their time at Parch Hill”</p>
                                    <p class="number">96%</p>
                                </li>
                                <li>
                                    <p class="text">“My child enjoys their time at Parch Hill”</p>
                                    <p class="number">96%</p>
                                </li>
                                <li>
                                    <p class="text">“My child enjoys their time at Parch Hill”</p>
                                    <p class="number">96%</p>
                                </li>
                                <li>
                                    <p class="text">“My child enjoys their time at Parch Hill”</p>
                                    <p class="number">96%</p>
                                </li>
                                <li>
                                    <p class="text">“My child enjoys their time at Parch Hill”</p>
                                    <p class="number">96%</p>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section Testimonial --> 
<div class="clearfix"></div>


<!-- Section Pontential Tody --> 
<section class="sec-pontential">
    <div class="part-one">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="heading">
                        <h1>UNLEASH <span></span> POTENTIAL TODAY  <span></span> YOUR FAMILY’S</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="dsc">
                        <p>
                            Under the childcare initiative we implement through all our education centres, you can
                            get help with your monthly tuition fees through childcare vouchers or the childcare
                            element of Working Tax Credits - up to a huge 70% discount! This means you don’t have
                            to worry about the extra cost and your child will be benefitting on a weekly basis.
                            At Parch Hill we don’t believe in contracting you in for longer than a month. This means
                            you are not tied into any agreement. Furthermore, we recognise that all families run into
                            unforeseen circumstances, be it sudden unemployment, family crisis or indeed, corona
                            virus! if you are finding it tough paying fees one particular month, we will work with you
                            so that you are free to take a break! 
                        </p>
                    </div>
                    <div class="col">
                        <div class="link">
                            <a href="#" type="button" class="btn  btn-lg bg-green-light">Support</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-img"></div>
    <div class="part-two">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="heading">
                        <h1>FREE ONLINE MATHS, ENGLISH or 11 PLUS
                            ASSESSMENT FOR YOUR CHILD.</h1>
                    </div>
                    <div class="link">
                        <a href="{{URL('/parent/register')}}" type="button" class="btn  btn-lg bg-red">Start Assessment</a>
                    </div>
                    <div class="dsc">
                        <p>AND YOU WILL RECEIVE A FREE COMPREHENSIVE PARENT FEEDBACK REPORT.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Pontential Tody --> 
  @endsection
  