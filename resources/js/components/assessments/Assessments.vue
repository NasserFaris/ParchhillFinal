<template>
  <section class="sec-Exam">
    <div class="container">
      <BaseTimer @interface="handleTimeLeftBack"></BaseTimer>
      <div class="row">
        <div class="col-md-12" >
          <div class="alert fade show" role="alert" v-if="timeAlert">
            <p>You have gone over the recommended time</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            
          </div>
          <h1>
                   {{subject_name}}
            </h1>
        </div>

        <div class="col-md-12">
          <svg class="base-timer svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <g class="base-timer circle">
              <circle class="base-timer path-elapsed" cx="50" cy="50" r="45" />
              <path
                :stroke-dasharray="circleDasharray"
                class="base-timer path-remaining"
                d="M 50, 50 m -45, 0 a 45,45 0 1,0 90,0 a 45,45 0 1,0 -90,0"
              />
            </g>
          </svg>
          <div class="question-count">
            <h3>Question</h3>
            <p class="count">{{questionNumer +1}} / {{ totalQuestionNum }}</p>
          </div>
        </div>-
        <!-- //end svg -->

        <div class="col-md-12" v-if="!AssessmentFinish">
          <!-- {{this.assessmentlist}} -->
          <div v-for=" (assessment, index) in assessmentlist ">
            <section v-if=" index   == questionNumer">
              <p class="question">{{assessment.question }}</p>

              <div class="col-md-12">
                <div class="choose-list">
                  <form>
                    <ul>
                      <li>
                        <div class="custom-control custom-radio">
                          <input
                            class="custom-control-input"
                            :checked="question_db_answer == assessment.answer1 "
                            :name="index"
                            @click="onCheck($event)"
                            type="radio"
                            :value="assessment.answer1"
                            :exam_id="assessment.exam_id"
                            :question_id="assessment.id"
                            id="01"
                          />
                          <label class="custom-control-label" for="01">{{assessment.answer1}}</label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-radio">
                          <input
                            class="custom-control-input"
                            :checked="question_db_answer == assessment.answer2 "
                            :name="index"
                            @click="onCheck($event)"
                            type="radio"
                            :value="assessment.answer2"
                            :exam_id="assessment.exam_id"
                            :question_id="assessment.id"
                            id="02"
                          />
                          <label class="custom-control-label" for="02">{{assessment.answer2}}</label>
                        </div>
                      </li>

                      <li>
                        <div class="custom-control custom-radio">
                          <input
                            class="custom-control-input"
                            :checked="question_db_answer == assessment.answer3 "
                            :name="index"
                            @click="onCheck($event)"
                            type="radio"
                            :value="assessment.answer3"
                            :exam_id="assessment.exam_id"
                            :question_id="assessment.id"
                            id="03"
                          />
                          <label class="custom-control-label" for="03">{{assessment.answer3}}</label>
                        </div>
                      </li>
                    </ul>
                  </form>
                </div>
              </div>
            </section>
          </div>
          <div class="choose-list">
            <div class="link">
              <button
                class="btn btn-lg bg-yellow"
                @click="previousQuetion()"
                :disabled="disabledpreviousBtn"
              >Previous Question</button>
              <button
                class="btn btn-lg bg-green"
                v-if="!Finish"
                @click="nextQuetion()"
                :disabled="disabled"
              >Next Question</button>
              <button class="btn btn-lg bg-green" v-else @click="finshQuetion()">Finish</button>
            </div>
          </div>
        </div>

        <div v-if="AssessmentFinish">
          <div class="row">
            <div class="col-md-6">
              <div class="res">
                <p class="text-title">You scored:</p>

                <h2
                  class="ques-count"
                >{{this.return_exam.filter(return_exam => return_exam.is_true=='T').length}} out of {{this.return_exam.length }}</h2>
                <div class="score">
                  <ul>
                    <li v-for=" item in return_exam" :class="isTueClass(item.is_true)"></li>
                  </ul>
                </div>
                <h3 class="text-dsc">Review questions</h3>
              </div>
            </div>
            <div class="col-md-6">
              <div class="res">
                <p class="text-title">In a total time of:</p>
                <div class="spend-time">
                  <p>{{ total_time | formattedTime }}</p>
                </div>
                <h3 class="text-dsc" @click="tryAgain()">Try again</h3>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="complete">
                <div class="row">
                  <div class="col-md-12">
                    <p class="title">You have completed your Assessment. Congratulations!</p>
                    <p class="title">
                      You will now be able to review the
                      <strong>Comprehensive Parent Feedback</strong> Report when you Log in.
                    </p>
                    <form>
                      <h1 class="form-title">Please use the following details to Log in.</h1>
                      <div class="form-group row">
                        <label class="col-sm-2 align-self-center col-form-label">Username:</label>
                        <div class="col-sm-3">
                          <input
                            type="text"
                            class="form-control"
                            
                            placeholder="Your email"
                            v-model="username"
                            required
                          />
                        </div>
                        <label class="col-sm-2 align-self-center col-form-label">Password:</label>
                        <div class="col-sm-3">
                          <input
                            type="text"
                            class="form-control"
                            
                            placeholder="Parent’s name"
                            v-model="password"
                            required
                          />
                        </div>
                        <div class="col-sm-2 align-self-center">
                          <div class="link">
                            <button type="button" class="btn btn-lg bg-yellow" @click="parentLogin()">Login</button>
                          </div>
                        </div>
                      </div>
                    </form>
                    <p
                      class="title"
                    >These details have also been emailed to you and you will find a wealth of resources to help you!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
const FULL_DASH_ARRAY = 283;

import axios from "axios";

import BaseTimer from "./BaseTimer";

export default {
  mounted() {
    this.start_assessmet();
  },

  components: {
    BaseTimer
  },

  data: function() {
    return {
      assessmentlist: {},

      disabled: false,
      disabledpreviousBtn: true,

      totalQuestionNum: 0,
      remindQuNum: 1,
      totalAnswer: 1,

      questionNumer: 0,
      qustionTimer: 0,

      Finish: false,
      AssessmentFinish: false,

      exam_id: 0,
      exam_question_id: 0,
      exam_question_id_to_get: 0,
      question_answer: "",
      question_db_answer: "",
      examanswer: {},
      return_exam: [],
      total_time: 0,
      username: "",
      password: "",
      timeLeft: 0,
      timeAlert: false, 
      subject_name: 'English'
    };
  },
  props: ["examquestion"],

  computed: {
    circleDasharray() {
      return `${(
        this.totalAnswer *
        (FULL_DASH_ARRAY / this.totalQuestionNum)
      ).toFixed(0)} 283`;
    }
  },

  filters: {
    formattedTime: function(value) {
      var sec_num = parseInt(value, 10);
      var hours = Math.floor(sec_num / 3600);
      var minutes = Math.floor((sec_num - hours * 3600) / 60);
      var seconds = sec_num - hours * 3600 - minutes * 60;

      if (hours < 10) {
        hours = "0" + hours;
      }
      if (minutes < 10) {
        minutes = "0" + minutes;
      }
      if (seconds < 10) {
        seconds = "0" + seconds;
      }
      return hours + ":" + minutes + ":" + seconds;
    }
  },
  methods: {
    onCheck() { 
      
      this.exam_question_id = event.target.getAttribute("question_id");
      this.question_answer = event.target.value;
      this.examanswer = {
        exam_id: this.exam_id,
        exam_question_id: this.exam_question_id,
        question_answer: this.question_answer,
        finsh_status: false
      };
      axios
        .put("/api/answer", this.examanswer)
        .then(response => {
        })
        .catch(error => {
          console.log(error);
        });
    },
    nextQuetion() {
      this.disabledpreviousBtn = false;
      this.questionNumer += 1;
      this.totalAnswer += 1;
      this.remindQuNum = this.totalQuestionNum - this.totalAnswer;
      if (this.remindQuNum <= 0) {
        this.disabled = true;
        this.Finish = true;
      }
      
      this.QuestionSubject(this.assessmentlist[this.questionNumer].subject_id);
      this.exam_question_id_to_get = this.assessmentlist[this.questionNumer].id;
      this.fetchQuestionAnswer();
    },
    previousQuetion() {
      this.disabled = false;
      this.Finish = false;
      this.questionNumer -= 1;
      this.totalAnswer -= 1;
      this.remindQuNum = this.totalAnswer;
      if (this.questionNumer == 0) {
        this.disabledpreviousBtn = true;
      }
      this.QuestionSubject(this.assessmentlist[this.questionNumer].subject_id);
      this.exam_question_id_to_get = this.assessmentlist[this.questionNumer].id;
      this.fetchQuestionAnswer();
    },
    fetchQuestionAnswer() {
      axios
        .get("/api/answered/" + this.exam_question_id_to_get)
        .then(response => {
          if (response.data.answer == "") {
            this.question_db_answer = "";
          } else {
            this.question_db_answer = response.data.answer;
          }
        })
        .catch(error => {
          console.log(error);
        });
    },
    finshQuetion() {
      axios
        .put("/api/finsish_assessment", {
          finsh_status: true,
          exam_id: this.exam_id
        })
        .then(response => {
          this.AssessmentFinish = true;

          this.return_exam = response.data.exam_answer;

          this.total_time = response.data.total_time;
          // console.log(response.data);
        })
        .catch(error => {
          console.log(error);
        });
    },
    tryAgain() {
      this.AssessmentFinish = false;
      axios
        .put("/api/tryAgain", { exam_id: this.exam_id })
        .then(response => {
          this.return_exam = response.data;
          this.start_assessmet();
        })
        .catch(error => {
          console.log(error);
        });
    },
    start_assessmet() {
      this.question_db_answer = "";
      this.remindQuNum = 1;
      this.totalAnswer = 1;
      this.questionNumer = 0;
      this.disabledpreviousBtn = true;
      this.disabled = false;
      this.Finish = false;  
      this.assessmentlist = this.examquestion;
      this.totalQuestionNum = this.examquestion.length;
      this.exam_id = this.assessmentlist[0].exam_id;
      this.AssessmentFinish = false;
    },
    parentLogin() {
      axios
        .post("/api/parentLogin", {
          username: this.username,
          password: this.password
        })
        .then(response => {
          // console.log(response.data[0].id);
          if(response.data.length >=1) {
            // window.location.href ='/parent/login/id/'+response.data[0].id;
             window.location.href ='/parent/details';
          }else{
            // invalid email or child's name
          } 
          // 
        })
        .catch(error => {
          console.log(error);
          console.log(error.length);
        });
    },

    handleTimeLeftBack(event) {
      this.timeLeft = event;
      if (this.timeLeft == 0) {
          this.timeAlert = true;
        }
    },
    isTueClass(isTreu) {
      return isTreu == "T" ? "answer-true" : "answer-false";
    }, 
    isTueClass(isTreu) {
      return isTreu == "T" ? "answer-true" : "answer-false";
    }, 
    QuestionSubject(subject){
       return this.subject_name  = subject == 1 ? "English" : "Maths";
    }
  }
};
</script> 