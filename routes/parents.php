<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Route::group(['middleware' => 'parent'], function () {
//     Route::get('/', 'ParentController@index');
//     Route::get('/assessment', 'ParentController@assessment');
//     Route::get('/details', 'ParentController@details');
//     Route::get('/lbooklets', 'ParentController@lbooklets');
//     Route::post('/lbooklets/{year_id}/{subject_id}/{lesson_id}', 'ParentController@lesson');
//     Route::PUT('/updateDetails/{id}', 'ParentController@updateDetails');
//     Route::get('/worksheets', 'ParentController@worksheets');
//     Route::get('/worksheets/chapters/{year_id}/{subject_id}', 'ParentController@chapters');
//     Route::get('/notifications', 'ParentController@notifications');
//     Route::get('/account', 'Account@create');
//     Route::post('/account/store', 'Account@store');

//     // Route::resource('/student', 'StudentController');
//     Route::get('/student', 'StudentController@index');
//     Route::post('/student/store', 'StudentController@store');
//     Route::get('/student/{id}/edit', 'StudentController@edit');
//     Route::put('/student/{id}', 'StudentController@update');

//     Route::get('/subscription', 'SubscriptionController@index');

//     Route::post('/subscription/store', 'SubscriptionController@store');
//     Route::get('/subscription/{id}/edit', 'SubscriptionController@edit');
//     Route::post('/subscription/{id}', 'SubscriptionController@update');
// });