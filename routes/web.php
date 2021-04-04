<?php

// use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('admin', function () {

    return view('admin/dashboard');
});
// Route::get('/', function () {
//     return view('welcome');
// });



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'DashboardController@index');
Route::get('/parents', 'DashboardController@parents');
Route::resource('/subject', 'SubjectsController');
Route::resource('/stages', 'StagesController');
Route::resource('/schoolyear', 'SchoolYearController');
Route::resource('/topic', 'ChaptersController');
Route::resource('/ph_tv', 'Ph_TvController');
Route::resource('/lesson', 'LessonController');
Route::get('/lesson/{id}/ldownload', 'LessonController@learningDownload');
Route::get('/lesson/{id}/adownload', 'LessonController@answerDownload');
Route::resource('/examPaper', 'ExamPaperController');
Route::get('/examPaper/{id}/{type}/download', 'ExamPaperController@show');






Route::resource('/worksheet', 'WorksheetController');
Route::get('/worksheet/{id}/download', 'WorksheetController@show');

    



Route::resource('/questions', 'QuestionsController');
Route::resource('/exam', 'ExamController');

Route::get('/parent/register', 'ParentController@register');

Route::get('/parent/login', 'ParentController@showLogin')->name('parent_login');
Route::post('/parent/login', 'ParentController@doLogin');
Route::get('/parent/logout', 'ParentController@doLogout');
Route::post('/parent/store', 'ParentController@store');




Route::group(['middleware' => 'auth:parent'], function () {
    Route::get('/parent/index', 'ParentController@index');
    Route::get('/parent/assessment', 'ParentController@assessment');
    Route::get('/parent/details', 'ParentController@details');
    Route::get('/parent/lbooklets', 'ParentController@lbooklets');
    Route::post('/parent/lbooklets/{year_id}/{subject_id}/{lesson_id}', 'ParentController@lesson');
    Route::get('/parent/lesson/{id}/ldownload', 'DownloadFile@learningDownload');
    Route::get('/parent/lesson/{id}/adownload', 'DownloadFile@answerDownload');
    
    Route::get('/parent/examPaper', 'ParentController@examPaper');
    Route::get('/parent/examPaper/{id}/ages', 'ParentController@examsByAges');

    // Route::get('/parent/examPaper/{id}/{type}/download', 'ParentController@examsDownload');
    Route::get('/parent/examPaper/{id}/{type}/download', 'ExamPaperController@show');

    Route::PUT('/parent/updateDetails/{id}', 'ParentController@updateDetails');
    Route::get('/parent/worksheets', 'ParentController@worksheets');
    Route::get('/parent/worksheets/chapters/{year_id}/{subject_id}', 'ParentController@chapters');
    Route::get('/parent/worksheet/{id}/download', 'DownloadFile@workSheet');

    Route::get('/parent/notifications', 'ParentController@notifications');
    Route::get('/parent/account', 'Account@create');
    Route::post('/parent/account/store', 'Account@store');

    // Route::resource('/parent/student', 'StudentController');
    Route::get('/parent/student', 'StudentController@index');
    Route::post('/parent/student/store', 'StudentController@store');
    Route::get('/parent/student/{id}/edit', 'StudentController@edit');
    Route::put('/parent/student/{id}', 'StudentController@update');

    Route::get('/parent/subscription', 'SubscriptionController@index');

    Route::post('/parent/subscription/store', 'SubscriptionController@store');
    Route::get('/parent/subscription/{id}/edit', 'SubscriptionController@edit');
    Route::post('/parent/subscription/{id}', 'SubscriptionController@update');
});

/*
Site 
*/

Route::get('/', 'SiteController@index');
Route::get('/resources', 'SiteController@resources');
Route::get('/find-a-center', 'SiteController@findCenter');
Route::get('/online-learning', 'SiteController@onlineLearning');
Route::get('/free-tuition', 'SiteController@freeTuition');
Route::get('/why-choose-us', 'SiteController@whyChooseUs');
Route::get('/FAQ', 'SiteController@faq');
Route::get('/blog', 'SiteController@blog');
Route::get('/careers', 'SiteController@careers');
Route::get('/policies', 'SiteController@policies');
Route::get('/ph-tv', 'SiteController@phTv');