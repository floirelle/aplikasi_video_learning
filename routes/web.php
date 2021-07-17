<?php

use App\Http\Controllers\PlaylistController;
use App\Http\Middleware\RoleMiddleware;
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

Route::post("/login", 'UserController@login');

Route::group(["middleware" => "rolemiddleware:Admin"], function () {
    Route::get('/learning-video', 'CourseController@showLearningVideo');
    Route::post('/view-course', 'CourseController@showDetailCourse')->name('view-course');
    Route::post("/logout", 'UserController@logout');
    Route::post("/getsessions", "CourseController@getCourseSession");

    Route::get('/manage-learning-video', 'CourseController@showManageLearning')->name('manage-learning-video');
    Route::post('/add-video', 'VideoController@showAddVideo');
    Route::post('/insert-video', 'VideoController@insertVideo');
    Route::get('/edit-video/{video_id}', 'VideoController@showDetailVideo');
    Route::post('/update-video', 'VideoController@updateVideo');
    Route::get('/delete-video/{video_id}', 'VideoController@deleteVideo');
});

Route::group(["middleware" => "rolemiddleware:Assistant"], function () {
    Route::get('/learning-video', 'CourseController@showLearningVideo');
    Route::get('/class-video', 'CourseController@getClassVideo');
    Route::post('/view-course', 'CourseController@showDetailCourse')->name('view-course');
    Route::post("/logout", 'UserController@logout');
    Route::post("/getsessions", "CourseController@getCourseSession");

    Route::post('/add-video', 'VideoController@showAddVideo');
    Route::post('/insert-video', 'VideoController@insertVideo');
    Route::get('/edit-video/{video_id}', 'VideoController@showDetailVideo');
    Route::post('/update-video', 'VideoController@updateVideo');
    Route::get('/delete-video/{video_id}', 'VideoController@deleteVideo');
    Route::post('/add-record', 'VideoController@showAddRecord');
    Route::post('/insert-record', 'VideoController@insertRecord');
    Route::get('/add-course', function () {
        return view('add-course');
    });
    Route::get('/manage-class-video', 'CourseController@showManageClass')->name('manage-class-video');

    Route::post('/learning-video', 'CourseController@filterCourse');

    //sementara
    // Route::post("/get-video-status","PlaylistController@getPlaylistVideoStatus");

});

// sementara
// Route::post('/add-playlist', 'PlaylistController@addPlaylist');
// Route::post('/delete-playlist', 'PlaylistController@deletePlaylist');
// Route::post('/delete-from-playlist', 'PlaylistController@deleteFromPlaylist');
Route::group(["middleware" => "rolemiddleware:Student"], function () {

    Route::get('/learning-video', 'CourseController@showLearningVideo');
    Route::get('/class-video', 'CourseController@getClassVideo');
    Route::post('/view-course', 'CourseController@showDetailCourse')->name('view-course');
    Route::post("/logout", 'UserController@logout');
    Route::post("/getsessions", "CourseController@getCourseSession");

    Route::post("/get-video-status", "PlaylistController@getPlaylistVideoStatus");
    Route::get('/my-playlist', 'PlaylistController@index')->name('my-playlist');
    Route::post('/add-playlist', 'PlaylistController@addPlaylist');
    Route::post('/delete-playlist', 'PlaylistController@deletePlaylist');
    Route::post('/delete-from-playlist', 'PlaylistController@deleteFromPlaylist');
});
