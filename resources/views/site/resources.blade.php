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
                <li>Resources</li>
              </ul>
            </div>
            <div class="bread-title">
              <h1 aria-current="page">Resources</h1>
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

  <!-- Section Resources 1 -->
<section class="sec-become-member">
  <div class="part-one">
      <div class="container">
          <div class="row">
              <div class="col">
                  <h1>PERSONALISED LEARNING FOR ALL STUDENTS</h1>
              </div>
          </div>
      </div>
  </div>
  <div class="container">
      <div class="row">
          <div class="col">
              <div class="part-two">
                  <ul class="list">
                      <li>All of our resources have been developed by our in-house educational experts. </li>
                      <li>Our resources follow the national curriculum, and work hand-in-hand with schooling,
                          however we love to challenge students with higher levels of work - only if they’re ready!</li>
                  </ul>
                  <div class="link">
                      <a href="#" type="button" class="btn  btn-lg bg-red">Become a Member </a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="part-thr">
      <div class="container">
          <div class="row">
              <div class="offset-lg-1 col-lg-10">
                  <form class="text-center"> 
                      <div class="form-group row">
                          <label   class="col-sm-2 col-form-label col-form-label-lg"> </label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control"  placeholder="Search Box" value="Search Box" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label  class="col-sm-2 col-form-label col-form-label-lg">Subject: </label>
                          <div class="col-sm-10">
                              <select class="custom-select "  required>
                                  <option  class="option-lg" selected disabled value="">Please Choose From Here</option>
                                  <option class="option-lg" value="English">English</option>
                                  <option class="option-lg" value="Maths">Maths</option>
                                </select>
                        </div>
                      </div>
                      <div class="form-group row">
                          <label  class="col-sm-2 col-form-label col-form-label-lg">Year: </label>
                          <div class="col-sm-10">
                              <select class="custom-select "  required>
                                  <option class="option-lg"  selected disabled value="">Please Choose From Here </option>
                                  <option class="option-lg" value="Reception">Reception</option>
                                  <option class="option-lg" value="Year 11">Year 11</option>
                                </select>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label  class="col-sm-2 col-form-label col-form-label-lg">Topics: </label>
                          <div class="col-sm-10">
                              <select class="custom-select "  required>
                                  <option  class="option-lg" selected disabled value="">Please Choose From Here</option>
                                  <option class="option-lg" value=""> topics in the Year </option>
                                  <option class="option-lg" value=""> topics in the Year </option>
                                </select>
                          </div>
                      </div>
                      <button class="btn btn-lg bg-red" type="submit">Search</button>
                   </form>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- End Section Resources 1-->
<div class="clearfix"></div>
<!-- Section Resources 2 -->
<section class="sec-level">
  <div class="container">
      <div class="row">
          <div class="col-md-6  col-md-3">
              <div class="part-one">
                  <div class="title"><h3>Primary Resources</h3> </div>
                  <div class="list">
                      <ul>
                          <li><a href="#">KS1  </a></li>
                          <li><a href="#">KS2  </a></li>
                          <li>11+</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-md-6  col-md-3">
              <div class="part-one">
                  <div class="title"><h3>Secondary Resources</h3> </div>
                  <div class="list">
                      <ul>
                          <li><a href="#">KS1  </a></li>
                          <li><a href="#">KS2  </a></li>
                          <li>11+</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-md-6  col-md-3">
              <div class="part-one">
                  <div class="title"><h3>Subjects</h3> </div>
                  <div class="list">
                      <ul>
                          <li><a href="#">KS1  </a></li>
                          <li><a href="#">KS2  </a></li>
                          <li>11+</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-md-6  col-md-3">
              <div class="part-one">
                  <div class="title"><h3>EAL</h3> </div>
                  <div class="list">
                      <ul>
                          <li><a href="#">KS1  </a></li>
                          <li><a href="#">KS2  </a></li>
                          <li>11+</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <div class="row row-cols-1  row-cols-md-3 ">
          <div class="col part-two d-flex align-items-stretch">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">RECEPTION</h3>
                <p class="card-text">Counting objects, inside and
                  outside, longer and shorter, letter
                  names, rhyming words and more.</p>
                  <button class="btn btn-lg bg-red" type="submit">Download Resources </button>
                  <ul>
                      <li><a href="#">English</a></li>
                      <span>|</span>
                      <li><a href="#">Maths</a></li>
                  </ul>
              </div>
            </div>
          </div>
          <div class="col part-two d-flex align-items-stretch">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">YEAR 1</h3>
                <p class="card-text">Comparing numbers, names of
                  shapes, consonant and vowel
                  sounds, sight words and more.</p>
                  <button class="btn btn-lg bg-red" type="submit">Download Resources </button>
                  <ul>
                      <li><a href="#">English</a></li>
                      <span>|</span>
                      <li><a href="#">Maths</a></li>
                  </ul>
              </div>
            </div>
          </div>
          <div class="col part-two d-flex align-items-stretch">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">YEAR 2</h3>
                <p class="card-text">Adding and subtracting, telling time,
                  measurement, categories, nouns,
                  verb tense, time order and more.</p>
                  <button class="btn btn-lg bg-red" type="submit">Download Resources </button>
                  <ul>
                      <li><a href="#">English</a></li>
                      <span>|</span>
                      <li><a href="#">Maths</a></li>
                  </ul>
              </div>
            </div>
          </div>
          <div class="col part-two d-flex align-items-stretch">
            <div class="card  border-yellow" >
              <div class="card-body">
                <h3 class="card-title bg-yellow">YEAR 3</h3>
                <p class="card-text">Place-value models, even and
                  odd, regular and irregular plurals,
                  contractions and more.</p>
                  <button class="btn btn-lg bg-red" type="submit">Download Resources </button>
                  <ul>
                      <li><a href="#">English</a></li>
                      <span>|</span>
                      <li><a href="#">Maths</a></li>
                  </ul>
              </div>
            </div>
          </div>
          <div class="col part-two d-flex align-items-stretch">
              <div class="card border-yellow">
                <div class="card-body">
                  <h3 class="card-title bg-yellow">YEAR 4</h3>
                  <p class="card-text">Multiplication facts, line graphs,
                      possessive nouns, conjunctions,
                      using a dictionary and more.</p>
                    <button class="btn btn-lg bg-red" type="submit">Download Resources </button>
                    <ul>
                        <li><a href="#">English</a></li>
                        <span>|</span>
                        <li><a href="#">Maths</a></li>
                    </ul>
                </div>
              </div>
          </div>
            <div class="col part-two d-flex align-items-stretch">
              <div class="card  border-yellow">
                <div class="card-body">
                  <h3 class="card-title bg-yellow">YEAR 5</h3>
                  <p class="card-text">Adding decimals, calculating
                      probabilities, synonyms, antonyms,
                      homophones and more.</p>
                    <button class="btn btn-lg bg-red" type="submit">Download Resources </button>
                    <ul>
                        <li><a href="#">English</a></li>
                        <span>|</span>
                        <li><a href="#">Maths</a></li>
                    </ul>
                </div>
          </div>
          </div>
          <div class="col part-two d-flex align-items-stretch">
              <div class="card ">
                <div class="card-body">
                  <h3 class="card-title" style="min-height: 60px;">11 Plus</h3>
                  <p class="card-text">All the resources you need for your
                      child’s 11 Plus exam. Worksheets,
                      past papers and more.</p>
                    <button class="btn btn-lg bg-red" type="submit">Download Resources </button>
                    <ul>
                        <li><a href="#">English</a></li>
                        <span>|</span>
                        <li><a href="#">Maths</a></li>
                        <span>|</span>
                        <li><a href="#">Exams</a></li>
                    </ul>
                </div>
              </div>
            </div>
            <div class="col part-two d-flex align-items-stretch">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">11+ Verbal Reasoning</h3>
                  <p class="card-text">Multiplication facts, line graphs,
                      possessive nouns, conjunctions,
                      using a dictionary and more.</p>
                    <button class="btn btn-lg bg-red" type="submit">Download Resources </button>
                    <ul>
                        <li><a href="#">Exams</a></li>
                       
                    </ul>
                </div>
              </div>
            </div>
            <div class="col part-two d-flex align-items-stretch">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">11+ Non Verbal Reasoning</h3>
                  <p class="card-text">Adding decimals, calculating
                      probabilities, synonyms, antonyms,
                      homophones and more.</p>
                    <button class="btn btn-lg bg-red" type="submit">Download Resources </button>
                    <ul>
                        <li><a href="#">Exams</a></li>
                        
                    </ul>
                </div>
              </div>
            </div>
            <div class="col part-two d-flex align-items-stretch">
              <div class="card  border-yellow">
                <div class="card-body">
                  <h3 class="card-title bg-yellow">YEAR 6</h3>
                  <p class="card-text">Quadrilaterals, adding fractions,
                      prepositions, commonly confused
                      words, modal verbs and more. </p>
                    <button class="btn btn-lg bg-red" type="submit">Download Resources </button>
                    <ul>
                        <li><a href="#">English</a></li>
                        <span>|</span>
                        <li><a href="#">Maths</a></li>
                    </ul>
                </div>
              </div>
            </div>
            <div class="col part-two d-flex align-items-stretch">
                <div class="card  border-yellow">
                  <div class="card-body">
                    <h3 class="card-title bg-yellow">YEAR 7</h3>
                    <p class="card-text">Percentages, variable expressions,
                      Greek and Latin roots and affixes,
                      personification and more.</p>
                      <button class="btn btn-lg bg-red" type="submit">Download Resources </button>
                      <ul>
                          <li><a href="#">English</a></li>
                          <span>|</span>
                          <li><a href="#">Maths</a></li>
                      </ul>
                  </div>
                </div>
            </div>
              <div class="col part-two d-flex align-items-stretch">
                <div class="card  border-yellow">
                  <div class="card-body">
                    <h3 class="card-title bg-yellow">YEAR 8</h3>
                    <p class="card-text">Proportional relationships, rational
                      numbers, phrases and clauses,
                      allusions, connotations and more.</p>
                      <button class="btn btn-lg bg-red" type="submit">Download Resources </button>
                      <ul>
                          <li><a href="#">English</a></li>
                          <span>|</span>
                          <li><a href="#">Maths</a></li>
                      </ul>
                  </div>
            </div>
            </div>
            <div class="col part-two d-flex align-items-stretch">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">YEAR 9</h3>
                  <p class="card-text">Linear functions, exponents,
                      Pythagoras’ theorem, active and
                      passive voice, ellipses and more.</p>
                    <button class="btn btn-lg bg-red" type="submit">Download Resources </button>
                    <ul>
                        <li><a href="#">English</a></li>
                        <span>|</span>
                        <li><a href="#">Maths</a></li>
                        <span>|</span>
                        <li><a href="#">Exams</a></li>
                    </ul>
                </div>
              </div>
            </div>
            <div class="col part-two d-flex align-items-stretch">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">GCSE</h3>
                  <p class="card-text">Quadratic equations, simultaneous
                      equations, parallel language,
                      figures of speech and more.</p>
                    <button class="btn btn-lg bg-red" type="submit">Download Resources </button>
                    <ul>
                        <li><a href="#">Exams</a></li>
                       
                    </ul>
                </div>
              </div>
            </div>
            <div class="col part-two d-flex align-items-stretch">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">EAL</h3>
                  <p class="card-text"> Here you will find Parch Hill’s collection of EAL (English as an Additional
                      Language) teaching and learning
                      resources. 
                       </p>
                    <button class="btn btn-lg bg-red" type="submit">Download Resources </button>
                    <ul>
                        <li><a href="#">Exams</a></li>
                        
                    </ul>
                </div>
              </div>
            </div>
        </div>
  </div>
</section>
<!-- End Section Resources 2-->

  @endsection
  