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
Route::post('/learning-video','CourseController@filterCourse');
Route::get('/class-video', function () {
    return view('class-video');
});

Route::get('/my-playlist', function () {
    return view('my-playlist');
});

Route::get('/manage-learning-video', 'CourseController@showManageLearning');
Route::get('/add-course', function () {
    return view('add-course');
});
Route::get('/manage-class-video', function () {
    return view('manage-class-video');
});

Route::post('/insert-course', 'CourseController@insertCourse');
Route::get('/delete-course/{course_code}', 'CourseController@deleteCourse');
Route::post('/view-course', 'CourseController@showDetailCourse')->name('view-course');
Route::get('/edit-course/{course_code}', 'CourseController@showEditCourse');
Route::post('/update-course', 'CourseController@updateCourse');

Route::get('/add-video/{session_id}', 'VideoController@showAddVideo');
Route::post('/insert-video', 'VideoController@insertVideo');
Route::post("/login",'UserController@login');
Route::post("/logout",'UserController@logout');
Route::get("/test","CourseController@getAllCourse");