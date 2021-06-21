<?php

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


Route::get('/', function () {
    return redirect('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/learning-video', 'CourseController@showLearningVideo');
Route::post('/learning-video', 'CourseController@filterCourse');
Route::get('/class-video', function () {
    return view('class-video');
});

Route::get('/my-playlist', function () {
    return view('my-playlist');
});

Route::get('/manage-learning-video', 'CourseController@showManageLearning')->name('manage-learning-video');
Route::get('/add-course', function () {
    return view('add-course');
});
Route::get('/manage-class-video', function () {
    return view('manage-class-video');
});

Route::post('/view-course', 'CourseController@showDetailCourse')->name('view-course');



Route::get('/add-video/{session_id}', 'VideoController@showAddVideo');
Route::post('/insert-video', 'VideoController@insertVideo');
Route::get('/edit-video/{video_id}', 'VideoController@showDetailVideo');
Route::post('/update-video', 'VideoController@updateVideo');
Route::get('/delete-video/{video_id}', 'VideoController@deleteVideo');

Route::post("/login", 'UserController@login');
Route::post("/logout", 'UserController@logout');
Route::get("/test", "CourseController@getAllCourse");
Route::post("/getsessions", "CourseController@getCourseSession");
// Route::get("/getsessions","CourseController@getCourseSession");