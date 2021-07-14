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
Route::get('/class-video', 'CourseController@getClassVideo');

Route::get('/my-playlist/{nim}', 'PlaylistController@index')->name('my-playlist');
Route::post('/delete-playlist', 'PlaylistController@deletePlaylist');

Route::get('/manage-learning-video', 'CourseController@showManageLearning')->name('manage-learning-video');
Route::get('/add-course', function () {
    return view('add-course');
});
Route::get('/manage-class-video', 'CourseController@showManageClass')->name('manage-class-video');

Route::post('/view-course', 'CourseController@showDetailCourse')->name('view-course');

Route::post('/add-video', 'VideoController@showAddVideo');
Route::post('/insert-video', 'VideoController@insertVideo');
Route::get('/edit-video/{video_id}', 'VideoController@showDetailVideo');
Route::post('/update-video', 'VideoController@updateVideo');
Route::get('/delete-video/{video_id}', 'VideoController@deleteVideo');
Route::post('/add-record', 'VideoController@showAddRecord');
Route::post('/insert-record', 'VideoController@insertRecord');

Route::post("/login", 'UserController@login');
Route::post("/logout", 'UserController@logout');
Route::get("/test", "CourseController@getAllCourse");
Route::post("/getsessions", "CourseController@getCourseSession");
