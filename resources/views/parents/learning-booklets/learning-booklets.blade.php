@extends('layouts.parents.app')
@section('content')    
                <div class="years">
                  <ul>
                    <li class="year" year_id = '1'><a  href="#">1 <span>year</span></a></li>                   
                    <li class="year" year_id = '2'><a  href="#">2<span>year</span></a></li>
                    <li class="year" year_id = '3'><a  href="#">3<span>year</span></a></li>
                    <li class="year" year_id = '4'><a  href="#">4<span>year</span></a></li>
                    <li class="year" year_id = '5'><a  href="#">5<span>year</span></a></li>
                    <li class="year" year_id = '6'><a  href="#">6<span>year</span></a></li>
                    <li class="year" year_id = '7'><a  href="#">7<span>year</span></a></li>
                    <li class="year" year_id = '8'><a  href="#">8<span>year</span></a></li>
                    <li class="year" year_id = '9'><a  href="#">9<span>year</span></a></li>
                    <li class="year" year_id = '10'><a  href="#">10<span>year</span></a></li>
                    <li class="year" year_id = '11'><a  href="#">11<span>year</span></a></li>
                  </ul>
                </div>
                <div class="lessons">
                   



                  <div class="subject " subject_id = '1'>
                    <a href="#">
                      <h1>
                        English
                  
                      </h1>
                    </a>
              
                    <span class="icon-play_arrow"></span>
                  </div>
                  <div class="subject"  subject_id = '2'>
                    <a href="#">
                    <h1>
                      Maths
                
                    </h1>
                  </a>
                    <span class="icon-play_arrow"></span>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <table class="table table-borderless">
                        <thead class="tb-header">
                          <tr>
                            <th>Lesson Type</th>
                            <th>UNIT 1</th>
                            <th>UNIT 2</th>
                            <th>UNIT 3</th>
                            <th>UNIT 4</th>
                            <th>UNIT 5</th>
                            <th>UNIT 6</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="bg-yellow">
                            <th scope="row" class="text-center text-white">Topic</th>
                            <td >
                              Lesson 1
                              <a  href="#" lesson_id='1'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td >
                              Lesson 9
                              <a  href="#" lesson_id='9'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 17
                              <a  href="#" lesson_id='17'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 25
                              <a  href="#" lesson_id='25'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 33
                              <a  href="#" lesson_id='33'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 41
                              <a  href="#" lesson_id='41'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                          </tr>
                          <tr class="bg-yellow">
                            <th scope="row" class="text-center text-white"></th>
                            <td>
                              Lesson 2
                              <a  href="#" lesson_id='2'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 10
                              <a  href="#" lesson_id='10'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 18
                              <a  href="#" lesson_id='18'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 26
                              <a  href="#" lesson_id='26'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 34
                              <a  href="#" lesson_id='34'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 42
                              <a  href="#" lesson_id='42'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                          </tr>
                          <tr class="bg-yellow">
                            <th scope="row" class="text-center text-white"></th>
                            <td>
                              Lesson 3
                              <a  href="#" lesson_id='3'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 11
                              <a  href="#" lesson_id='11'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 19
                              <a  href="#" lesson_id='19'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 27
                              <a  href="#" lesson_id='27'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 35
                              <a  href="#" lesson_id='35'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 43
                              <a  href="#" lesson_id='43'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                          </tr>
                          <tr class="bg-yellow">
                            <th scope="row" class="text-center text-white"></th>
                            <td>
                              Lesson 4
                              <a  href="#" lesson_id='4'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 12
                              <a  href="#" lesson_id='12'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 20
                              <a  href="#" lesson_id='28'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 28
                              <a  href="#" lesson_id='28'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 36
                              <a  href="#" lesson_id='36'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 44
                              <a  href="#" lesson_id='44'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                          </tr>
                          <tr class="bg-yellow">
                            <th scope="row" class="text-center text-white"></th>
                            <td>
                              Lesson 5
                              <a  href="#" lesson_id='1'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 13
                              <a  href="#" lesson_id='13'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 21
                              <a  href="#" lesson_id='21'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 29
                              <a  href="#" lesson_id='29'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 37
                              <a  href="#" lesson_id='37'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 45
                              <a  href="#" lesson_id='45'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                          </tr>
                          <tr class="bg-green-light border border-white">
                            <th scope="row" class="text-center text-white">Revision</th>
                            <td>
                              Lesson 6
                              <a  href="#" lesson_id='6'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 14
                              <a  href="#" lesson_id='14'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 22
                              <a  href="#" lesson_id='22'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 30
                              <a  href="#" lesson_id='30'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 38
                              <a  href="#" lesson_id='38'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 46
                              <a  href="#" lesson_id='46'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                          </tr>
                          <tr class="bg-yellow border border-white">
                            <th scope="row" class="text-center text-white">Mini Assessment</th>
                            <td>
                              Lesson 7
                              <a  href="#" lesson_id='7'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 15
                              <a  href="#" lesson_id='15'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 23
                              <a  href="#" lesson_id='23'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 31
                              <a  href="#" lesson_id='31'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 39
                              <a  href="#" lesson_id='39'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 47
                              <a  href="#" lesson_id='47'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                          </tr>
                          <tr class="bg-green-light border border-white">
                            <th scope="row" class="text-center text-white">Revision</th>
                            <td>
                              Lesson 8
                              <a  href="#" lesson_id='8'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 16
                              <a  href="#" lesson_id='16'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 24
                              <a  href="#" lesson_id='24'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 32
                              <a  href="#" lesson_id='32'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 40
                              <a  href="#" lesson_id='4'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                            <td>
                              Lesson 48
                              <a  href="#" lesson_id='48'  class="lesson_id float-right icon-info_outline" data-toggle="modal" data-target="#lessonsinfo"></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="heading">
                  <h1>
                    HOW TO USE THE LESSONS

                  </h1>
                  
                </div>
                <div class="steps">
                  <h1>
                    Just follow these four easy steps…
                  </h1>
                  <ol>
                    <li> Click on the set of lessons for your child’s year group or what they were
                      assigned post assessment.</li>
                    <li> Printing out the learning booklet and answer sheets.</li>
                    <li>Find a calm space where your child can work for about 2 hours or splits this
                      up across the week in 30 minute chunks. </li>
                    <li>Use the answer guidance to support your child as they work through a lesson. </li>
                    <li> If you have subscribed to one of our ‘complete’ package subscriptions the
                      tutor will go through this with your child.</li>
                  </ol>
                </div>
 
                  <!-- End Section Main Content Parents -->

<div class="clearfix"></div>

<!-- Modal -->
<div class="modal fade " id="lesson_modal" tabindex="-1" role="dialog" aria-labelledby="lessonsinfo" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="subject_title">English</h1>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <h1 class="title">Learning Booklet  <a href="" ><span class="icon-play_arrow" id="learnDownload"> </span></a></h1>
       
        <p class="sub-title bg-yellow"> <strong>This lesson’s topic</strong> <small id="topic">  </small> </p>   
        <h1 class="title" >Lesson Objectives</h1>
        <div class="bg-yellow">
          <ul class="modal-list bg-yellow" id="objectives">
          </ul>
        </div>
        <h1 class="title">Answer Booklet  <a href="" ><span class="icon-play_arrow" id="answerDownload"></span></a></h1>
        <div class="ph-video">
          
          <iframe id = "answer_url" width="100%" height="200" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="fact">
                <h1 class="title">
                  FACT OF THE WEEK:
                </h1>
              </div>
            </div>
            <div class="col-md-6">
              <div class="quote">
                <h1 class="title text-green-light">
                  QUOTE OF THE WEEK:
                </h1>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="fact">
                <p class="text bg-green-light" id="fact_week">         
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="quote">
                <p class="text bg-green" id = "quet_week">  
                </p>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
</div>
 
@endsection

@section('app_script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script >
         

$( document ).ready(function() {
    console.log( "ready!" );

         var year_id ;
         var subject_id ;
         var lesson_id ;
         var subject_title;
         var learningBookletId ;
         
       

         
         $('.year').click( function()  {
            year_id =   $(this).attr('year_id');
            
            $('.year').removeClass('active');
              $(this).addClass('active');
          }) ;

       $('.subject').click( function()  {
        $('.subject').removeClass('active');
        $(this).addClass('active');
         subject_id =   $(this).attr('subject_id');
         subject_title = $.trim($(this).find( "h1" ).text());

         console.log(subject_id);
       }) ;

       $('.lesson_id').click( function()  {
         if( typeof(year_id) == 'undefined' ||  typeof(subject_id) == 'undefined'
            ){
              Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please select the year and subject',
                  })
               return;
            }
         lesson_id =   $(this).attr('lesson_id');
         
        $.ajax({
          url: '{{url("/")}}'+'/parent/lbooklets/'+year_id+'/'+subject_id+'/'+lesson_id,
          type: "POST",
          dataType: 'json',
          success: function (data) {
             if(typeof(data.Error) != "undefined" && data.Error !== null) {
              Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: data.Error,
                  })
              return
              }
            $('#subject_title').empty();
            $('#subject_title').text(subject_title); 
            $('#topic').empty()
            $('#topic').text(data.lesson[0].topic);
            $('#objectives').empty();  
            $.each(data.objective, function (i, item) {
                $('#objectives').append('<li>'+data.objective[i].name+'</li>');
              });

            //  fact_week quet_week
            $('#fact_week').empty()
            $('#fact_week').text(data.lesson[0].fact_week);
            $('#quet_week').empty()
            $('#quet_week').text('“ '+data.lesson[0].quote_week+' ”');
            
            
            
            var str = data.lesson[0].url; 
            var url = str.replace("https://youtu.be/", "https://www.youtube.com/embed/");

            $('#answer_url').empty()
            $('#answer_url').removeAttr('src');
            $('#answer_url').attr('src',url);
            learningBookletId = data.lesson[0].id;
            
            $('#lesson_modal').modal('show'); 

        // $("#lesson_modal").modal({
        //     backdrop: 'static',
        //     keyboard: false,
            
        // });

          },
          error: function (data) {
              console.log('Error:', data);
             
          }
      });


      $('#learnDownload').click(function(){
        window.open('{{url('/')}}/parent/lesson/'+learningBookletId+'/ldownload', '_blank');
      });
      $('#answerDownload').click(function(){
        window.open('{{url('/')}}/parent/lesson/'+learningBookletId+'/adownload', '_blank');
      });
       
       }) 
        
      });
       </script> 
@endsection